<?php
abstract class Vehicle
{
    abstract public function start();
    abstract public function stop();
}
class Car extends Vehicle
{
    public function start(){
        return "Car started";
    }

    public function stop(){
        return "Car stopped";
    }

}

$obj = new Car();
echo $obj->start()."<br>";
echo $obj->stop()."<br>";

