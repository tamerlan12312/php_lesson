<?php
    require "func_var/variable.php" ;    # variable 
    include "func_var/functions.php" ;   # funksiyalar

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $title = $_POST["basliq"];
         $desc = $_POST["aciklama"];
         $img = $_POST["resim"];
         
         echo $title ;
         echo $desc ;
         echo $img ;
         filmArtir($filmler,$title,$desc,$img) ;
     }
    
?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
          <?php include "views/_menu.php" ;?>
           <?php include "views/_blog-list.php" ;?>
        </div>
    </div>
<?php include "views/_footer.php";?>