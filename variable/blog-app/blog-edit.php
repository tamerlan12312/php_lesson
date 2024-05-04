<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar
    $id = $_GET["id"] ;
    $selectedMovie = getBlogById($id) ;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $desc = $_POST["desc"];
        $img = $_POST["img"];
        $url = $_POST["url"];
        
        
        editBlog($id,$title,$desc,$img,$url) ;
        header ("Location: admin-blogs.php") ;
    }


?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
            <form method="POST">
                <label for="">title :</label>
                <input type="text" class="w-100" name="title" value="<?php echo $selectedMovie["title"] ;?>">
                <br>
                <div class="mt-3">
                <label for="">description :</label>
                <input type="text" class="w-100" name="desc" value="<?php echo $selectedMovie["description"] ;?>">
                </div>

                <div class="mt-3">
                <label for="">image :</label>
                <input type="text" class="w-100" name="img" value="<?php echo $selectedMovie["image"] ;?>">
                </div>
                <div class="mt-3">
                <label for="">url :</label>
                <input type="text" class="w-100" name="url" value="<?php echo $selectedMovie["url"] ;?>">
                </div>
                <br>
                <input type="submit" class="mt-4" value="Gonder">
                
               </form>
            </div>

        </div>
    </div>
<?php include "views/_footer.php";?>