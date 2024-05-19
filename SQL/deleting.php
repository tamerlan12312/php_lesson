<?php

include "config.php" ;

// $query = "DELETE FROM blogs WHERE id=1";
// $query = "DELETE FROM blogs WHERE id>5 and id<10";
$query = "DELETE FROM blogs WHERE active=0";


$result = mysqli_query($connect,$query) ;
$count = mysqli_affected_rows($connect) ; # nece melumat silindiyini burada gosterecekdir 

if ($result) {
    echo "Silinen data ededi : ".$count ;
} else {
    echo "Melumat silinmedi" ;
}

mysqli_close($connect) ;

?>