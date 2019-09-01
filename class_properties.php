<?php
class Cars{
    /**
     * 1. Properties or Variables
     * 2. Methods
     * */
    // var $wheelCount; //property or variable
    var $wheelCount = 4;
    var $doorCount = 4;

    function carDetails()
    {
        return "This car has " . $this->wheelCount . " wheels.";
    }

}

// $car = new Cars();
$bmw = new Cars();
$mercedes = new Cars();

echo $bmw->doorCount; //4
echo "<br>";
echo $bmw->doorCount = 10; //10
echo "<br>";
echo $mercedes->carDetails();
?>