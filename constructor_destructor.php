<?php
class Cars{

    public $wheelCount = 4;
    static $doorCount = 4;

    function __construct()
    {
        /** Constructor called automatically when class is instanciated */
        // echo $this->wheelCount;
        echo self::$doorCount++;
    }

    function __destruct()
    {
        /** destructor called automatically when class is instanciated */
        // echo $this->wheelCount;
        echo self::$doorCount--;
    }

    function details()
    {
        /** Constructor called automatically when class is instanciated */
        echo $this->wheelCount;
    }
    
}

$bmw = new Cars();
$mercedes = new Cars();
$mercedes2 = new Cars();
// $bmw->details();
?>