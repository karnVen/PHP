
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

    <label>Enter number for counting: </label>
    <input type="text" name="num">
    <input type="submit" value="enter">

    </form>

</body>
</html>

<?php

$num = $_POST["num"];


for ($i=0;$i<$num;$i++){
    echo $i;
}

?>