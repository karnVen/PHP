
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <Label>username: </Label><br>
    <input type="text" name="username"><br>
    <Label>passwrod: </Label><br>
    <input type="text" name="password"><br>
    <input type="submit" value="log in">

    </form>

    <?php 
    //action in form send data to that file thast listed in it 
   // echo $_GET["username"];
    //echo $_GET["password"];

    echo "{$_POST["username"]}";//hids data 
    echo "{$_POST["password"]}";



    ?>

</body>
</html>