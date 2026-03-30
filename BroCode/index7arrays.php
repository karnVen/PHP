
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php " method="post">

    <label for="">Enter country: </label>
    <input type="text" name="c">
    <input type="submit" >
    </form>
</body>
</html>

<?php
/*
$foods = array("apple","banna");

foreach($foods as $food){
    echo $food ;
}

//array_shift($foods);
$foods = array_reverse($foods);
echo $foods[1] ;

//associative array (key value pair )
$capitals = array("USA"=>"washington d.c","japan"=>"tokyo","india"=>"delhi"
);

echo $capitals["india"];
*/


$capitals = array("USA"=>"washington d.c","japan"=>"tokyo","india"=>"delhi"
);

$capital= $capitals[$_POST["c"]];
echo $capital;

?>
