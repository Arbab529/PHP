<?php
class Parentclass{
    public $name;
    public $age;
    public $salary;
    function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    function info(){
        echo "<h1> Employee Information </h1>";
        echo "Name  : ".$this->name."<br>";
        echo "Age   : ".$this->age."<br>";
        echo "Salary: ".$this->salary."<br>";
    }
}

class child extends Parentclass {
    public $TA = 1000;
    public $PB = 500;
    public $total_salary;
    function info(){
        $this->total_salary =$this->TA+$this->PB+$this->salary;
        echo "<h1> Manager Information </h1><br>";
        echo "Name  : ".$this->name."<br>";
        echo "Age   : ".$this->age."<br>";
        echo "Salary: ".$this->total_salary."<br>";
    }
}
 $employee = new Parentclass("Arbab",20,20000);
 $employee->info();
 $manager = new child("Arain",20,20000);
 $manager->info();


?>