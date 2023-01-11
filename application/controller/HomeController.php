<?php

namespace WiseChain\controller;

use JetBrains\PhpStorm\NoReturn;
use WiseChain\core\Application;
use WiseChain\core\Controller;
use WiseChain\model\Student;

class HomeController extends Controller
{
    public function home(): string|array|bool
    {
        return $this->render('home');
    }
    public function userGuide(): string|array|bool
    {
        return $this->render('userGuide');
    }
    #[NoReturn] public function language()
    {
        if (isset($_SERVER['HTTP_REFERER']) && !empty($_COOKIE['lang'])) {
            $_COOKIE['lang'] = $_COOKIE['lang'] == 'en' ? 'ar' : 'en';
            setcookie('lang', $_COOKIE['lang'], time() + (86400 * 7),  "/", "", "", TRUE);
            Application::$app->response->redirect($_SERVER['HTTP_REFERER']);
        } else {
            Application::$app->response->redirect();
        }
    }

    public function test(): string|array|bool
    {
        return $this->render('test', [
            'Student' => (new Student)->getAll()
        ]);
    }
    public function majors(): bool|array|string
    {
        return $this->render('majors');
    }
    public function doctors(): bool|array|string
    {
        return $this->render('doctors');
    }
    public function students(): bool|array|string
    {
        return $this->render('students');
    }
    public function classes(): bool|array|string
    {
        return $this->render('classes');
    }
}