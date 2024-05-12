<?php

include "config.php" ;

// $query = "SELECT *  FROM blogs" ;
// $query = "SELECT *  FROM blogs WHERE id > 3 AND id < 7 " ; # burada butun datani getirmir WHERE ile hansi deyeri axtaririqsaq o gelir
// $query = "SELECT *  FROM blogs WHERE id > 3" ;
// $query = "SELECT *  FROM blogs WHERE title='film 1' " ;
$query = "SELECT * FROM blogs WHERE active = 1 and title like '%film%' " ; # burada % isaresi ferqi yoxdu evveli sonunda ne olacagi title icinde film sozunun kecidiyi hamsini getirecey

$result = mysqli_query($connect,$query) ;


if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){

        echo $row["id"]." ".$row["title"]." ".$row["description"]." ".$row["imageUrl"]." ".$row["active"] ;
        echo "<br>" ;
    }
} else {
    echo "Melumat tapilmadi" ;
}




 mysqli_close($connect) ;

?>