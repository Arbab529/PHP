<?php
class Parentclass{
    public $name;
    function info(){
        echo "Name: ".$this->name."<br>";
    }
    private function moreinfo(){
        echo "Password : 12345";
        info();
    }
}

class child extends Parentclass {
    public $name;
    function info(){
        echo "Name: ".$this->name."<br>";
    }
}
 $parent = new Parentclass();
 $parent->name="Arbab";
 $parent->info();
 $parent->moreinfo();

 $child = new child();
 $child->name="Arain";
 $child->info();


?>