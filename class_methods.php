<?php
class Cars{
    /**
     * 1. Properties or Variables
     * 2. Methods
     * */
    function gretting()
    {
        # code...
    }
    
    function gretting2()
    {
        # code...
    }
}

$theMethods = get_class_methods('Cars');
foreach ($theMethods as $method) {
    echo $method . "<br>";
}

?>