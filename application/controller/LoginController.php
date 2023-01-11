<?php

namespace WiseChain\controller;

use JetBrains\PhpStorm\NoReturn;
use WiseChain\core\Controller;
use WiseChain\core\Request;
use WiseChain\core\Response;
use WiseChain\model\Student;
use WiseChain\model\User;
use WiseChain\core\Application;

class LoginController extends Controller
{
    public function login(Request $request, Response $response): bool|array|string
    {
        $login = new User();
        if ($request->isPost()){
            $login->loadData($request->getBody());

            if ($login->validate() && $login->login()){
                $response->redirect('/dashboard');
            }
        }
        return $this->render('login',[
            'model' => $login
        ]);
    }
    #[NoReturn] public function logout(Request $request, Response $response)
    {
        Application::$app->user = null;
        Application::$app->session->remove('user');
        $response->redirect('/');
    }
    public function dashboard(): bool|array|string
    {
        return $this->render('dashboard');
    }
    public function profile(): bool|array|string
    {
        return $this->render('profile');
    }
    public function student(Request $request, Response $response): bool|array|string
    {
        $student = new Student();
        if ($request->isPost()){

            $student->loadData($request->getBody());

            if ($student->UpdateGrade()){
                $response->redirect('/student');
            }
        }
        return $this->render('student',[
            'Student' => (new Student)->getAll()
        ]);
    }
}