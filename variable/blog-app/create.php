<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["basliq"];
        $desc = $_POST["aciklama"];
        $img = $_POST["resim"];
        $url = $_POST["url"];
        
        echo $title ;
        echo $desc ;
        echo $img ;
        filmArtir($title,$desc,$img,$url) ;
        header ("Location: index.php") ;
    }


?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
          <?php include "views/_menu.php" ;?>

            <div class="col-9">
            <form action="create.php" method="POST">
                <label for="">Basliq :</label>
                <input type="text" class="w-100" name="basliq">
                <br>
                <div class="mt-3">
                <label for="">Aciklama :</label>
                <input type="text" class="w-100" name="aciklama">
                </div>

                <label for="">Resim :</label>
                <input type="text" class="w-100" name="resim">
                <div class="mt-3">
                <label for="">Url :</label>
                <input type="text" class="w-100" name="url">
                </div>
                <br>
                <input type="submit" class="mt-4" value="Gonder">
                
               </form>
            </div>

        </div>
    </div>
<?php include "views/_footer.php";?>