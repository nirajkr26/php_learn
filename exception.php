<?php
try{
    $a=10;
    $b=0;
    if($b==0){
        throw new Exception("Division by zero");
    }
    $result=$a/$b;
    echo $result;
}catch(Exception $e){
    echo "Exception caught: ".$e->getMessage();
}

?>