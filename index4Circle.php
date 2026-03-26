<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>r:</label>
        <input type="text" name="r">
        <input type="submit" value="enter">


    </form>
</body>
</html>

<?php
$r=$_POST["r"];
$p=pi();

$area = round($p) * pow($r, 2);          
$volume = (4/3) * $p * pow($r, 3);


echo "{$area} <br>{$volume} ";
?>