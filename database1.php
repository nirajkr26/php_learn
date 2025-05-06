<?php //connecting to database
$host="localhost";
$user="root";
$pass="";
$dbname="student";//database name
$conn=new mysqli($host,$user,$pass,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT * FROM student";//select all data from student table
$result = $conn->query($sql);//execute query

if ($result->num_rows > 0) {//check if there are results
    while($row = $result->fetch_assoc()) {//fetch results
        echo "Name: " . $row["Name"]. " - Course: " . $row["Course"]. " - Age: " . $row["Age"]. " - Marks: " . $row["Marks"]. "<br>";
    }
} else {
    echo "No results";
}
?>