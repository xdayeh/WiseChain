<?php

namespace WiseChain\core;

use WiseChain\core\middlewares\AuthMiddleware;
use WiseChain\core\middlewares\BaseMiddleware;

abstract class Controller
{
    public mixed $action;
    protected array $middlewares    = [];
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(
            ['dashboard', 'setting', 'groups', 'privileges', 'profile', 'block','logout','student'],
            ['login']
        ));
    }
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
    public function registerMiddleware(BaseMiddleware $middleware): void
    {
        $this->middlewares[] = $middleware;
    }
    public function render($view, $params = []): bool|array|string
    {
        Application::$app->language->load($view);
        return Application::$app->view->renderView($view, $params);
    }
}