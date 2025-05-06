<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="post">
        <label>Radius</label>
        <input type="text" name="radius">
       <br> <input type="submit" value="Calculate">
    </form>
</body>
</html>
<?php
$radius=$_POST["radius"];
$area=round(pi()*pow($radius,2),2);
$circumference=round(2*pi()*$radius,2);
echo "Area-$area\nCircumference-$circumference";
?>