<?php

class autoloader
{
    public static function loader()
    {
           spl_autoload_register('self::load');
    }
    
    public static function load($class)
    {
        $file = $class . '.php';
        
        if (file_exists($file))
        {
            require $file;
        }
    }
}

autoloader::loader();    