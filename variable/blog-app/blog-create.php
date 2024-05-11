<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $desc = $_POST["desc"];
        $img = $_POST["img"];
        $url = $_POST["url"];
        
        
       if (createBlog($title,$desc,$img,$url)) {
        $_SESSION["message"] = $title ."adli bloq elave olundu" ;
        $_SESSION["type"] = "success" ;
        header ("Location: admin-blogs.php") ;
       }  else {
        echo "Xeta bas verdi" ;
       }
      
    }


?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
            <form action="blog-create.php" method="POST">
                <label for="">title :</label>
                <input type="text" class="w-100" name="title">
                <br>
                <div class="mt-3">
                <label for="">description :</label>
                <input type="text" class="w-100" name="desc">
                </div>

                <div class="mt-3">
                <label for="">image :</label>
                <input type="text" class="w-100" name="img">
                </div>
                <div class="mt-3">
                <label for="">url :</label>
                <input type="text" class="w-100" name="url">
                </div>
                <br>
                <input type="submit" class="mt-4" value="Gonder">
                
               </form>
            </div>

        </div>
    </div>
<?php include "views/_footer.php";?>