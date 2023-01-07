<?php

namespace WiseChain\core;

class View
{
    public function renderViewOnly($view, array $params): bool|string
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . 'view' . DIRECTORY_SEPARATOR . "$view.php";
        return ob_get_clean();
    }
    public function renderView($view, array $params): array|bool|string
    {
        $viewContent = $this->renderViewOnly($view, $params);
        ob_start();
        include_once Application::$ROOT_DIR . 'view' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . "main.php";
        $layoutContent = ob_get_clean();
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }
}