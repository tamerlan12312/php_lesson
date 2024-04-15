<?php
   if (isset($_POST["btnSubmit"]) and $_POST["btnSubmit"] == "Göndər") {
    echo "submitted"."<br>" ;
    print_r($_FILES["sendFile"]);
    # 3.Umumi olaraq Xeta olarsa
    $file_name = $_FILES["sendFile"]["name"];
    $file_error = $_FILES["sendFile"]["error"];
    $file_size = $_FILES["sendFile"]["size"] ;
    $file_tmpname = $_FILES["sendFile"]["tmp_name"] ;
    $uploadOk = 1 ;
    $file_types_arr = array("gif","pdf","jpeg") ;


    # 5 faylin tipini teyin etmek o şərtlərə əsasən tipi olmalidir
    $file_explode = explode(".",$file_name) ;
    $file_name_arr = $file_explode[0] ; # faylin adi
    $file_name_type = $file_explode[1] ;
    if (!in_array($file_name_type,$file_types_arr)) {
        echo "faylin tipi uygun deyildir"."<br>";
        echo "Qebul edilen fayl tipleri".implode(",",$file_types_arr)."<br>" ;
        $uploadOk = 0 ;
    }
    # 6 yuklenen fayl adini random deyismek
    $file_random_name = md5(time().$file_name_arr).".".$file_name_type ;
    # 4 fayl bos olarsa
    if (empty($file_name)) {
        echo "Fayl qeyd edin"."<br>" ;
        $uploadOk = 0 ;
    }
    # 2.faylin olcusunu kontrol ele
    if ($file_size > 5000000) {
        echo "Faylın ölçüsü çoxdur"."<br>";
        $uploadOk = 0 ;
    }
    # 1. file qovluguna sekili post etmek
    $file_folder = "./files/" ;
    $file_post_folder = $file_folder.$file_random_name ;
    if ($uploadOk == 0) {
        echo "Fayl yuklenmedi" ;
    } else {
        if (move_uploaded_file($file_tmpname,$file_post_folder)) {
            echo "Fayl yuklendi"."<br>"   ;
        } else {
            echo "Xeta"."<br>" ;
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
        <input type="file" name="sendFile" id="">
        <input type="submit" value="Göndər" name="btnSubmit">
    </form>


</body>
</html>