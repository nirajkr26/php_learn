<?php
interface Animal
{
    public function makeSound();
}
interface Pet
{
    public function play();
}

class Dog implements Animal, Pet
{
    public function makeSound()
    {
        return "Bark!";
    }
    
    public function play()
    {
        return "Dog is Playing";
    }
}

$dog = new Dog();
// $cat = new Cat();
echo $dog->makeSound(); // Outputs: Bark!
echo "<br>";
echo $dog->play(); // Outputs: Dog is Playing
