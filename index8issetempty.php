<?php 

//isset() = returns true if a variable is declared 
//$username = "karn";

//empty() = returns true if a variable is not declared 
/*
if(isset($_POST["login"])){

$username= $_POST["username"];
$password=$_POST["password"];
    if(empty($_POST["username"])){
        echo "put username you idiot";
    }elseif(empty($_POST["password"])){
        echo "put password";
    }else{
        echo "hello {$username}";
    }
    }
    */

    foreach($_POST as $key=>$value){
        echo "{$key} = {$value}";
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
    <form action="index.php" method="post">
        <label > username: </label>
        <input type="text" name="username"><br>
        <label for="">password: </label>
        <input type="text" name="password"><br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>