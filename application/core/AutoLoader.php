<?php

namespace WiseChain\core;

class AutoLoader
{
    public static function AutoLoad($className): void {
        $className = str_replace('WiseChain', '', $className);
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        $className = strtolower($className . '.php');
        if (file_exists(APP_PATH . $className)){
            require APP_PATH . $className;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\AutoLoader::AutoLoad');