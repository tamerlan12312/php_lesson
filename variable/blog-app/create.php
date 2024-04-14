<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar
?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
          <?php include "views/_menu.php" ;?>

            <div class="col-9">
            <form action="index.php" method="POST">
                <label for="">Basliq :</label>
                <input type="text" class="w-100" name="basliq">
                <br>
                <div class="mt-3">
                <label for="">Aciklama :</label>
                <input type="text" class="w-100" name="aciklama">
                </div>
                <br>
                <label for="">Resim :</label>
                <input type="text" class="w-100" name="resim">
                <input type="submit" class="mt-4" value="Gonder">
               </form>
            </div>

        </div>
    </div>
<?php include "views/_footer.php";?>