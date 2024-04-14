<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php
   if (!isset($_POST["login"])) {
     echo "login clicked" ;
   }
   if (isset($_POST["register"])) {
     echo "register clicked" ;
   }
 
 ?>

    <form action="multiple.php" method="POST">
        username : <input type="text" name="username">
        <br> <br>
        password : <input type="text" name="password">
        <br> <br>
     <input type="submit" name="login" value="Login">
    </form>

    <br> <br>
    <form action="multiple.php" method="POST">
        username : <input type="text" name="username">
        <br> <br>
        password : <input type="text" name="password">
        <br> <br>
        email : <input type="text" name="email">
        <br> <br>
        <input type="submit" name="register" value="Register">
    </form>

</body>
</html>