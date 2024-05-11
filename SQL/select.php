<?php
include "config.php" ;
 
$query = "SELECT * from blogs" ;  # burada blogsdan ulduzlari sec yeni data bazadan melumatlari getir
$query = "SELECT id,title,description from blogs" ;  # bos yer tutmasin deye id title ve desc gotururuk
# ulduz yerine id,title kimi yazmaq olar ama ulduz ile butun columnlar secilir onlarin arasinda search olunur
$result = mysqli_query($connect,$query) ;

while ($row = mysqli_fetch_row($result)) {
    echo $row[0]." ".$row[1]." ".$row[2] ;
    echo "<br>" ;
}

echo "<hr>" ;

$result = mysqli_query($connect,$query) ;

while ($row = mysqli_fetch_assoc($result)) { # assoc ile key ve value seklinde ekranda yazmaq mumkundur
    echo $row["id"]." ".$row["title"]." ".$row["description"] ;
    echo "<br>" ;
}

// echo $row[0] ; #id 
// echo "<br>" ;
// echo $row[1] ; #title

mysqli_close($connect) ;

?>