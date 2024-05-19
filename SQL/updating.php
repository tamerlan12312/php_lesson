<?php
   include "config.php" ;
 
   $query = "UPDATE blogs SET title='update ',description='updatesdf' WHERE id=1 " ; #bele yazsaq hamisi update olacaq title ve desc
   // $query = "UPDATE blogs SET imageUrl='2.jpeg' WHERE active=1 " ;
   # idni qeyd etsek sadece o id update olacaqdir

   $result = mysqli_query($connect,$query) ;
  
   if ($result) {
     echo "Melumat update olundu" ;
    } else {
       echo "Melumat update olunmadi" ;
   }


   mysqli_close($connect) ;

?>