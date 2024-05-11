<?php

include "config.php" ;

# sorgu bele gonderilir  INSERT INTO hara blogs daxilindekileri yaziriq ve VALUES ise ne gedeceyi

$query = "INSERT INTO blogs(title,description,imageUrl,url,active) VALUES ('film 8','film 8 description','2.jpeg','film-8',1)  ;";
// $query .= "INSERT INTO blogs(title,description,imageUrl,url,active) VALUES ('film 6','film 6 description','2.jpeg','film-6',0) ;";
// $query .= "INSERT INTO blogs(title,description,imageUrl,url,active) VALUES ('film 7','film 7 description','3.jpeg','film-7',1) ;";

 $result = mysqli_query($connect,$query) ;

 $last_id = mysqli_insert_id($connect) ;
// $result = mysqli_multi_query($connect,$query) ; #multi ile birden cox sorgu gondermek ucun ist olunur

if ($result) {
    echo "Melumat yuklendi Last id :".$last_id ;
} else {
    echo "Melumat yuklenmedi" ;
}
?>