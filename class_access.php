<?php
class Cars{

    public $wheelCount = 4; //this variable cab be used though out the whole program
    private $doorCount = 4; // can be used only to this calss
    protected $seatCount = 4; //only available inside this class and subclass

    function carDetails()
    {
        echo $this->wheelCount;
        echo $this->doorCount;
        echo $this->seatCount;
    }
    
}

$bmw = new Cars();
// echo $bmw->wheelCount; //available everywhere in the program
// echo $bmw->doorCount; //not available outside the class
// echo $bmw->seatCount; //not available outside the class
$bmw->carDetails();
?>