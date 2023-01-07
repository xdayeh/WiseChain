<?php

use WiseChain\controller\BlockController;
use WiseChain\controller\SettingController;
use WiseChain\core\Application;
use WiseChain\model\User;
use WiseChain\controller\HomeController;
use WiseChain\controller\LoginController;

$config = [
    'userClass' => User::class
];
$app = new Application(APP_PATH, $config);

$app->router->get('/', [HomeController::class, 'home']);
$app->router->get('/userGuide', [HomeController::class, 'userGuide']);
$app->router->get('/language', [HomeController::class, 'language']);
$app->router->get('/login', [LoginController::class, 'login']);
$app->router->post('/login', [LoginController::class, 'login']);
$app->router->get('/logout', [LoginController::class, 'logout']);
$app->router->get('/dashboard', [LoginController::class, 'dashboard']);
$app->router->get('/profile', [LoginController::class, 'profile']);
$app->router->get('/setting', [SettingController::class, 'setting']);
$app->router->get('/privileges', [SettingController::class, 'privileges']);
$app->router->get('/groups', [SettingController::class, 'groups']);
$app->router->get('/block', [BlockController::class, 'block']);
$app->router->get('/student', [LoginController::class, 'student']);
//test
$app->router->get('/test', [HomeController::class, 'test']);

$app->run();