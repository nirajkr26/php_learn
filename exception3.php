<?php
function calcDivision($dividend,$divisor){
    if($divisor==0){
        trigger_error("Division by zero",E_USER_WARNING);
        return false;
    }else{
        return $dividend/$divisor;
    }
}
echo calcDivision(10,0);

function customError($errno, $errstr, $errfile, $errline,$errcontext){
    $message=date("y-m-d H:i:s - ");
    $message.="Error: [".$errno."],"." $errstr in $errfile on line $errline";
    $message.="Variables:".print_r($errcontext,true)."\r\n";
    error_log($message,1,"error.log");
    die("There was an error. Please try again later.");

}
set_error_handler("customError");
echo calcDivision(10,0);
echo("this will never be printed");
?>
