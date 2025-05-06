<?php
include("database.php");

$sql = "select * from users";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    while($rows=mysqli_fetch_assoc($result)){
        echo $rows["id"]."<br>";
        echo $rows["user"]."<br>";
        echo $rows["reg_date"]."<br>";
    }
}else{
    echo "no user found";
}

mysqli_close($conn);

?>