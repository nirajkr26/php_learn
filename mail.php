<?php
$to="nirajkumargupta2642006@gmail.com";
$subject="Greetings";
$message="Have a good day!";
$from="noname01012006@gmail.com";
$headers="From: $from";
$check=mail($to,$subject,$message,$headers);
// $check=mail($to,$subject,$message);
if($check){
    echo "Mail sent successfully";
}else{
    echo "Mail not sent";
}

?>