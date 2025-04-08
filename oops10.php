<?php
interface Mathss{
    public function  __call($name, $arguments);
}

class MathOperation implements Mathss
{
    public function __call($name, $arguments)
    {
        if ($name == "add") {
            switch (count($arguments)) {
                case 1:
                    return $arguments[0];
                case 2:
                    return $arguments[0] + $arguments[1];
                case 3:
                    return $arguments[0] + $arguments[1] + $arguments[2];
                default:
                    return "Invalid number of arguments";
            }
        }
    }
}

$obj = new MathOperation();
echo "Add1: " . $obj->add(1) . "<br>";
echo "Add2: " . $obj->add(1, 2) . "<br>";
echo "Add3: " . $obj->add(1, 2, 3) . "<br>";
echo "Add4: " . $obj->add(1, 2, 3, 4) . "<br>";
