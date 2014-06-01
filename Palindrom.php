<?php
/**
 * Represents the class Palindrom.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   Palindrome
 * @author    Bernhard Mehler <bernhard.mehler@gmail.com>
 * @copyright 2014 Bernhard Mehler
 * @license   git://github.com/bmehler/palindrome.git bmehler/palindrome GPL
 * @link      git://github.com/bmehler/palindrome.git bmehler/palindrome
 */
class Palindrom
{
    /**
     * The constructer of the class Palindrom.    
     */
    public function __construct() 
    {
    }    
    
     /**
     * The function isPalindrom.
     * @param string $wort The word to check for a palindrom
     * @return boolean     
     */    
    public function isPalindrom ($wort)
    {             
        //checks if $wort is of type string
        // if not an Exception is thrown
        if (!is_string($wort)) {
            throw new \InvalidArgumentException('Invalid argument');            
        } else {
            //converts the string to lower case
            $originalString = strtolower($wort);
            //reverses the string    
            $reversedString = strrev($originalString);
            //compares the strings and checks them to similarity       
            if (strcmp($originalString, $reversedString) == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
}