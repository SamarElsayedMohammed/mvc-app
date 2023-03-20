<?php

namespace PHPMVC\LIB;


class Autoload
{

    public static function autoload($className)
    {
        //remove namespace
        $class = str_replace('PHPMVC', '', $className);
        $class = str_replace('\\', '/', $class);
        $classFile = APP_PATH . strtolower($class) . '.php';
        if (file_exists($classFile)) {
            require $classFile;
        }
    }
}
spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');
