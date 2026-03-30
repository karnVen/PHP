<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

    <label for="">username:</label>
    <input type="text" name="username">
    <label for="">age:</label>
    <input type="text" name="age">
    <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php

if(isset($_POST["login"])){
   // $username = $_POST["username"]; <script>alert('You have been Hacked!');</script>  cant handle exicutable statements


    $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);

    //php is flexi
    echo $username;
    echo $age;
}

?>