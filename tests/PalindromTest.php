<?php
/**
 * Represents the class PalindromTest.
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
class PalindromTest extends PHPUnit_Framework_TestCase
{
    /**
     * Checks if the word of the dataProvider
     * is a palindrom.
     *     
     * @dataProvider isValidPalindrom
     * @test
     */
    public function makeSureThatWordIsAPalindrom($wort)
    {   
        $this->a = new Palindrom();        
        $this->b = $this->a->isPalindrom($wort);        
        $this->assertTrue($this->b);              
    }

   /**
    * The function isValidPalindrom()
    *
    * @return array Contains the test strings
    */
    public function isValidPalindrom ()
    {
        return array(           
            array('Otto'),
            array('Lagerregal'),
            array('Somos') 
        );
    }
}