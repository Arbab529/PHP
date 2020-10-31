<?php

class calc{

public $a,$b,$c;

//default value in costructor are 0
function __construct($b=0,$c=0){
    $this->b=$b;
    $this->c=$c;
}

function sum(){
    $this->a= $this->b+ $this->c;
    echo "B = ".$this->b."<br>";
    echo "C = ".$this->c."<br>";
    echo "Sum of B an C = ".$this->a."<br>"."<br>";
}
}

echo "Default value"."<br>";
$obj = new calc();
$obj->sum();
echo "With value"."<br>";
$obj = new calc(20,30);
$obj->sum();

?>