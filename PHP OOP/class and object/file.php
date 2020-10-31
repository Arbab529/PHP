<?php
class calc{
    public $a,$b,$c;
    function sum(){
        $this->a=$this->b+$this->c;
        return $this->a;
    }
}
$c1 = new calc();
$c1->b=10;
$c1->c=20;
echo $c1->sum();
?>



