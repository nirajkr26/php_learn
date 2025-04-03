<?php
$to="nirajkumargupta2642006@gmail.com";
$subject="Greetings";
$message="Have a good day!";
$from="noname01012006@gmail.com";
$headers="From: $from";
$check=mail($to,$subject,$message,$from,$headers);
if($check==true){
    echo "Mail sent successfully";
}else{
    echo "Mail not sent";
}

?>