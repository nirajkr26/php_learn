<?php
class Animal
{
    public function sound()
    {
        return "Some sound\n" ;
    }
}
class Dog extends Animal
{
    public function bark()
    {
        return "bhow bhow" ;
    }
}

$obj = new Dog();
echo $obj->sound();
echo $obj->bark();
