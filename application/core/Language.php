<?php

namespace WiseChain\core;

class Language
{
    public array $dictionary = [];
    public function load($path) : array
    {
        $lang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2) : 'en';
        if(!empty($_COOKIE['lang'])){
            $_COOKIE['lang'] = htmlspecialchars($_COOKIE['lang']) === 'en' ? 'en' : 'ar';
        } else {
            $_COOKIE['lang'] = $lang == 'ar' ? 'ar' : 'en';
            setcookie('lang', $_COOKIE['lang'], time() + (86400 * 7), "/", "", "", TRUE);
        }
        $languageFileToLoad = dirname(__FILE__). DIRECTORY_SEPARATOR . 'language' . DIRECTORY_SEPARATOR . $_COOKIE['lang'] . DIRECTORY_SEPARATOR . $path . '.lang.php';
        if(file_exists($languageFileToLoad)) {
            $Lang = [];
            require $languageFileToLoad;
            if(is_array($Lang) && !empty($Lang)) {
                foreach ($Lang as $key => $value) {
                    $this->dictionary[$key] = $value;
                }
            }
        } else {
            trigger_error('Sorry the language file ' . $path . ' not exists', E_USER_WARNING);
            exit();
        }
        return $this->dictionary;
    }
}