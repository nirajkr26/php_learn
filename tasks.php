<?php

$price =0;
$quantity =0;
$totalPrice=0;
$discountPercentage=0;
$finalPrice=0;

if(isset($_POST['calculate'])){
    $price=(float)$_POST['price'];
    $quantity=(float)$_POST['quantity'];
    // $discountPercentage=(float)$_POST['discountPercentage'];
    $totalPrice=$price*$quantity;
    if($totalPrice>5000){
        $discountPercentage=25;
    }elseif($totalPrice>3500){
        $discountPercentage=20;
    }elseif($totalPrice>2500){
        $discountPercentage=15;
    }elseif($totalPrice>1500){
        $discountPercentage=10;
    }else{
        $discountPercentage=5;
    }
    $finalPrice=$totalPrice-($totalPrice*$discountPercentage/100);
    echo "Total price is: ".$finalPrice;
}else{
    echo "Please fill all the fields";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="price">Product Price (Rs) :</label><br>
    <input type="number" step="0.01" name="price" id="price" required>
        <br>
    <label for="quantity">Quantity :</label><br>
    <input type="number" name="quantity" id= "quantity" required>
        <br><br>
    <button type="submit" name="calculate">Calculate</button>
</form>

<?php if(isset($_POST['calculate'])):?>
    <p><strong>Total Price (no discount): </strong><?php echo number_format($totalPrice,2);?></p>
    <p><strong>Discount Applied %: </strong><?php echo $discountPercentage;?></p>
    <p><strong>Total Price (with discount): </strong><?php echo number_format($finalPrice,2);?></p>
<?php endif; ?>

</body>
</html>