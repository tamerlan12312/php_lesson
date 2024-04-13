<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="yazdir.php" method="GET">
 <input type="text" name="q" placeholder="Progamming Language">
 <br>
 <!--  buradaki name/category/age yazdir.phpdeki $_get ile tutulur -->
 <input type="text" name="category" placeholder="Category "> 
 <br>
 <input type="number" name="age" placeholder="Age">
 <br>
 <button type="submit">Gonder</button>
    </form>
</body>
</html>