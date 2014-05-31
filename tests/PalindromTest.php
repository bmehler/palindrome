<?php
class PalindromTest extends PHPUnit_Framework_TestCase {  
    /** 
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
    * @return array
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