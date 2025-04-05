<?php
class A
{
    public function fun()
    {
        return __CLASS__ ;
    }
}
class B extends A
{
    public function fun()
    {
        return __CLASS__ ;
    }
}

class C extends B
{
    public function fun()
    {
        return __CLASS__ ;
    }
}

$obj = new C();
echo $obj->fun();

