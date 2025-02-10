<?php
class Details{
    public $name;
    public $age;

    public function __construct($name,$age){
        $this->name=$name;
        $this->age=$age;
    }

    public function message(){
        return "Name: ".$this->name."<br> Age: ".$this->age;
    }

}
$person1=new Details("Niraj",18);
echo $person1->message();

