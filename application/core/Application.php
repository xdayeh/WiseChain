<?php
namespace WiseChain\core;

use Exception;
use WiseChain\model\DataModel;

class Application
{
    public static Application $app;
    public static string $ROOT_DIR;
    public Request $request;
    public Response $response;
    public Router $router;
    public Session $session;
    public View $view;
    public mixed $controller;
    public Language $language;
    public string $userClass;
    public Database $database;
    public mixed $user;
    public function __construct($rootPath, array $config) {
        self::$app          = $this;
        self::$ROOT_DIR     = $rootPath;
        $this->request      = new Request();
        $this->response     = new Response();
        $this->router       = new Router($this->request, $this->response);
        $this->session      = new Session();
        $this->view         = new View();
        $this->language     = new Language();
        $this->database     = new Database();
        $this->userClass    = $config['userClass'];

        $primaryValue = $this->session->get('user');
        if ($primaryValue){
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
        }else{
            $this->user = null;
        }
    }
    public function run(): void {
        try {
            $this->language->load('default');
            echo $this->router->resolve();
        }catch (Exception $e){
            $this->response->setStatusCode($e->getCode());
            echo $this->view->renderView('_error', [
                'exception' => $e
            ]);
        }
    }
    public function login(DataModel $user): bool
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }
    public static function iGuest(): bool
    {
        return !self::$app->user;
    }
}