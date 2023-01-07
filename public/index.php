<?php

namespace WiseChain;

const DS = DIRECTORY_SEPARATOR;
define('APP_PATH', realpath(dirname(__FILE__)) . DS . '..' . DS . 'application' . DS);
if ($_SERVER['SERVER_PORT'] === 80){
    define('URL_XP', "http://" . $_SERVER["SERVER_NAME"] . substr($_SERVER["PHP_SELF"], 0, strrpos($_SERVER["PHP_SELF"], DS)) . DS);
}else{
    define('URL_XP', "http://" . $_SERVER["SERVER_NAME"].':'.$_SERVER['SERVER_PORT'] . DS);
}
const CSS = URL_XP . 'style' . DS . 'stylesheet' . DS;
const JS = URL_XP . 'style' . DS . 'javascript' . DS;
const IMG = URL_XP . 'style' . DS . 'image' . DS;

require_once APP_PATH . 'core' . DS . 'AutoLoader.php';
require_once APP_PATH . 'routes' . DS .'web.php';