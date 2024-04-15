<?php
  
  if (isset($_POST["btnSubmit"]) and $_POST["btnSubmit"] == "Göndər") {
    
    $file_count = count($_FILES["sendFile"]["name"] );

    for ($x=0 ; $x < $file_count ; $x++) {

        $filesTmpname = $_FILES["sendFile"]["tmp_name"][$x];
        $filesName = $_FILES["sendFile"]["name"][$x];
         
        $post_folder = "images/".$filesName ;

        if (move_uploaded_file($filesTmpname,$post_folder)) {
            echo $filesName."Yuklendir.<br>"   ;  
        } else {
            echo "Fayllar yuklenmedi" ;
        }


    }



  }
 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="sendFile[]" id="" multiple="multiple"> 
        <input type="submit" value="Göndər" name="btnSubmit">
    </form>


</body>
</html>