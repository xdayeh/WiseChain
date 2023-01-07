<?php

namespace WiseChain\core;

use Exception;
class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];
    public function __construct(Request $request, Response $response) {
        $this->request = $request;
        $this->response = $response;
    }
    public function get(string $route, $callback): void {
        $this->routes['get'][$route] = $callback;
    }
    public function post(string $route, $callback): void
    {
        $this->routes['post'][$route] = $callback;
    }
    /**
     * @throws Exception
     */
    public function resolve() {
        $path       = $this->request->path();
        $method     = $this->request->method();
        $callback   = $this->routes[$method][$path] ?? throw new Exception(Application::$app->language->dictionary['Error_404'], 404);

        if (is_array($callback)){
            /** @var Controller $controller */
            $controller = new $callback[0]();
            Application::$app->controller = $controller;
            $controller->action = $callback[1];
            $callback[0] = $controller;
            foreach ($controller->getMiddlewares() as $middleware) {
                $middleware->execute();
            }
        }

        return call_user_func($callback, $this->request, $this->response);
    }
}