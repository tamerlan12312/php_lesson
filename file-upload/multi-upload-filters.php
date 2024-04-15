<?php
  
  if (isset($_POST["btnSubmit"]) and $_POST["btnSubmit"] == "Göndər") {
    echo "<pre>" ;
    // print_r($_FILES["sendFile"])  ;
    $file_count = count($_FILES["sendFile"]["name"] ) ;
    $maxFileSize = (1024 * 1024) * 1 ; # 1mb

    $fileTypes = array(
    "image/png",
    "image/jpeg",
    "image/jpg",
    "application/pdf"
    ) ;




    if ($file_count > 3) {
        die("3den cox fayl secmek olmaz") ; #die funksiyasi asagisindaki funksiyalari oldurur yeni islemir
    }

    for ($x=0 ; $x < $file_count ; $x++) {

        $filesTmpname = $_FILES["sendFile"]["tmp_name"][$x];
        $filesName = $_FILES["sendFile"]["name"][$x];
        $files_size = $_FILES["sendFile"]["size"][$x];
        $file_type = $_FILES["sendFile"]["type"][$x]; #image/jpeg

        $file_explode_name = explode(".",$filesName) ;
        $files_explode_arr = $file_explode_name [0] ; # seklin adi
        $files_explode_type = $file_explode_name [1] ; # seklin tipi

        $filesName = time().$files_explode_arr.".".$files_explode_type ; # seklin adi deyisdirildi
        $filesName = md5(rand(0,999).$files_explode_arr).".".$files_explode_type ;

        
        $post_folder = "images/".$filesName ;

        if (in_array($file_type,$fileTypes)) {
             
            if ($files_size > $maxFileSize) {
                echo "Fayl olcusu maksimum 1mb olmalidir" ;     
            } else {
                if (move_uploaded_file($filesTmpname,$post_folder)) {
                    echo $filesName."Yuklendir.<br>"   ;  
                  } else {
                    echo "Fayllar yuklenmedi" ;
                  }
            }


        } 

        else {
            echo "Fayl tipi uygun deyildir <br> "."Uygun Olanlar bunlardir : ".implode(", ",$fileTypes);
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