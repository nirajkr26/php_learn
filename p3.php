<?php
function show()
{
    echo "Hello world" . "<br>";
}
show();
function add($a, $b)
{
    return "Sum of " . $a . " and " . $b . " is " . $a + $b . "<br>";
}
echo add(4, 5);
function simpleInterest($p, $r, $t)
{
    return "simple interest is ".(($p * $r * $t) / 100)."<br>";
}
echo simpleInterest(5000, 2, 5);

