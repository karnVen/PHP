<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

    <label for="">quantity: </label><br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
    </form>
</body>
</html>

<?php 

$item="pizza";
$price = 5.99;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;

echo "you ordered {$quantity} x {$item}s ";
echo "your totale is : {$total}";


//using get you can change variables values in url
?>