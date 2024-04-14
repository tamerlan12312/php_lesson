<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- sekil dosta gonderende enctype yazmaq lazimdir -->

    <form action="upload.php" method="POST" enctype="multipart/form-data">
 
        <input type="file" name="fileToUpload" id="">
        <input type="submit" value="Göndər" name="btnUpload" >

    </form>
</body>
</html>