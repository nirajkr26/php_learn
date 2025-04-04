<?php
class Person
{
    private $name;
    private $age;
    public function setName($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getDetails()
    {
        return "Your name is " . $this->name . " and your age is " . $this->age ;
    }
}

$obj = new Person();
$obj->setName("John", 20);
echo $obj->getDetails();
