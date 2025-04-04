<?php
class Student{
    public $name;
    public $age;
    public $reg;
    public function __construct($name,$age,$reg){
        $this->name=$name;
        $this->age=$age;
        $this->reg=$reg;
    }
    
    public function getDetails(){
        return "Your name is ".$this->name." and your age is ".$this->age." and your registration number is ".$this->reg;
    }
}

$obj=new Student("John",20,"123456789");
echo $obj->getDetails();


?>