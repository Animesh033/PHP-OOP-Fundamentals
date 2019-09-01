<?php
class Cars{

    static $wheelCount = 4; //this variable cab be used though out the whole program
    static $doorCount = 4; // static variable

    static function carDetails()
    {
        echo Cars::$wheelCount;
        echo Cars::$doorCount;
    }
    
}

echo Cars::$doorCount; //available using ::$var
Cars::carDetails();
/** 
 * No need to instanciate the class to access static properties or methods
*/
?>