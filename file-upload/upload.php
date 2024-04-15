<?php
  
  if (isset($_POST["btnUpload"]) and $_POST["btnUpload"] == "Göndər") {

    # faylin olcusu 
    # faylin adi eyni olduqda random ad qoymaq
    # faylin tipi jpg yaxud png ve.s


    
    $fileToUpload = $_FILES["fileToUpload"] ;
    $file_name = $_FILES["fileToUpload"]["name"] ;
    $file_tmp_name = $_FILES["fileToUpload"]["tmp_name"] ;
    $files="./files/" ;

    # fayl secilib secilmediyi
    if (empty($file_name)) {
        echo "fayli secin" ;
    }

    if (move_uploaded_file($file_tmp_name,$files.$file_name)) {
        echo "fayl yuklendi" ;
    } else {
        echo "fayl yuklenmedi" ;
    }
  }

?>

<!-- if (isset($_POST["btnUpload"]) and $_POST["btnUpload"] == "Göndər") {

     
echo "<pre>" ;

print_r($_FILES["fileToUpload"]) ;

$filename = $_FILES["fileToUpload"]["name"];
$filetmp = $_FILES["fileToUpload"]["tmp_name"];

$uploadFolder = "./files/" ; # 1.jpg.Tamerlan,pdf kimi
$dest_path = $uploadFolder.$filename  ; # bunu yazdiqda qolvugun sonuna seklinin adini yazacaqdir
if (move_uploaded_file($filetmp,$dest_path)) { # move_uploaded_file fayli yuklemek ucundur
   echo "dosya yuklendi";
} else {
  echo "dosya yuklenmedi" ;
}
} -->