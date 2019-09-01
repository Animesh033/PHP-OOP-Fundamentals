<?php
class Cars{
    
    private $doorCount = 4; // can be used only to this calss

    function getValues()
    {
        echo $this->doorCount;
        
    }

    function setValues()
    {
        $this->doorCount = 10;
        
    }
    
}

$bmw = new Cars();

// $bmw->getValues(); //4
$bmw->setValues(); //set to $doorCount = 10
$bmw->getValues(); //10
?>