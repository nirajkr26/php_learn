<?php
class A
{
    public function fun1()
    {
        return __CLASS__ ;
    }
}
class B extends A
{
    public function fun2()
    {
        return __CLASS__ ;
    }
}

class C extends B
{
    public function fun3()
    {
        return __CLASS__ ;
    }
}

$obj = new C();
echo $obj->fun1()."<br>";
echo $obj->fun2()."<br>";
echo $obj->fun3()."<br>";

