<?php

namespace WiseChain\core;

use JetBrains\PhpStorm\NoReturn;

class Response
{
    public function setStatusCode(int $code): void {
        http_response_code($code);
    }
    #[NoReturn] public function redirect(string $url = DIRECTORY_SEPARATOR): void {
        session_write_close();
        header('Location: '.$url);
        exit();
    }
}