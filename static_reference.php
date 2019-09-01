<?php
class Cars{

    static $wheelCount = 4; //this variable cab be used though out the whole program

    static function carDetails()
    {
        return self::$wheelCount;
    }
    
}

class Trucks extends Cars{
    static function display()
    {
        echo parent::carDetails();
    }
}

Trucks::display();
/** 
 * No need to instanciate the class to access static properties or methods
*/
?>