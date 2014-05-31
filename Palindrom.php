<?php

class Palindrom
{
    private $_wort;  

    public function __construct() 
    {
    }    
    
    public function isPalindrom ($wort)
    {             
        if (!is_string($wort)) {
            throw new \InvalidArgumentException('Invalid argument');            
        } else {        
            $originalString = strtolower($wort);       
            $reversedString = strrev($originalString);           
            if (strcmp($originalString, $reversedString) == 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
    }
}