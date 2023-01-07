<?php

namespace WiseChain\core\middlewares;

use Exception;
use WiseChain\core\Application;

class AuthMiddleware extends BaseMiddleware
{
    public array $guest = [];
    public array $user = [];

    public function __construct(array $guest = [], array $user = [])
    {
        $this->guest = $guest;
        $this->user = $user;
    }
    /**
     * @throws Exception
     */
    public function execute()
    {
        if (!Application::iGuest()){
            if (empty($this->user) || in_array(Application::$app->controller->action, $this->user)){
                Application::$app->request->redirect('/dashboard');
            }
        }else{
            if (empty($this->guest) || in_array(Application::$app->controller->action, $this->guest)){
                throw new Exception("Forbidden ", 403);
            }
        }
    }
}