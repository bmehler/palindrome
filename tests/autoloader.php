<?php
/**
 * Represents a Autoloader Class for including classes.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   palindrome
 * @author    Bernhard Mehler <bernhard.mehler@gmail.com>
 * @copyright 2014 Bernhard Mehler
 * @license   GPL
 * @link      git://github.com/bmehler/palindrome.git bmehler/palindrome
 */
class Autoloader
{
    /**
     * Calls the static function load with the current class for autoloading.
     *
     * @return void
     */
    public static function loader()
    {
        spl_autoload_register('self::load');
    }
    
    /**
     * Includes the current class and do a require.
     *
     * @return void
     */
    public static function load($class)
    {
        $file = $class . '.php';
        
        if (file_exists($file)) {
            require $file;
        }
    }
}

Autoloader::loader();    