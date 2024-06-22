<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar
    $id = $_GET["id"] ;

    $result = getBlogById($id) ;
    $selectedMovie = mysqli_fetch_assoc($result) ;
    $categories = getCategories() ;
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $desc =  control_input($_POST["desc"]);
        $img = $_POST["img"];
        $url = $_POST["url"];
        $category = $_POST["category"];
        $active = isset($_POST["active"]) ? 1 : 0 ;
        if(editBlog($id,$title,$desc,$img,$url,$category,$active)){
            $_SESSION["message"] = $title ."adli bloq update olundu" ;
            $_SESSION["type"] = "warning" ;
            header ("Location: admin-blogs.php") ;
        }   else {
            echo "xeta" ;
        }
        

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
              <textarea name="desc" id="" cols="30" rows="10" ><?php echo $selectedMovie["description"] ;?></textarea>
                </div>

                <div class="mt-3">
                <label for="">image :</label>
                <input type="text" class="w-100" name="img" value="<?php echo $selectedMovie["imageUrl"] ;?>">
                </div>
                <div class="mt-3">
                <label for="">url :</label>
                <input type="text" class="w-100" name="url" value="<?php echo $selectedMovie["url"] ;?>">
                </div>
                <div class="mt-3">
                <label for="">Category :</label>

                <select name="category" id="category" class="form-select <?php echo (!empty($category_err)) ? "is-invalid" : "" ;?>">
                    <option value="0">Seçin :</option>
                    <?php foreach($categories as $c){
                        if ($selectedMovie["category_id"] == $c["id"]) {
                            echo "<option selected value='{$c["id"]}'>{$c["name"]} </option>" ;
                        } else {
                            echo "<option value='{$c["id"]}'>{$c["name"]} </option>" ;
                        }
                    } ;?>   

                </select>
                <span class="invalid-feedback"><?php echo $category_err ;?></span>
                <script type="text/javascript">
                  document.getElementById("category").value = "<?php echo $category  ;?>"
                </script>
                </div>
                <div class="form-check mt-3">
                <label for="" class="form-check-label">Active</label>
                <input type="checkbox" class="form-check-input " name="active" <?php if($selectedMovie["active"]) {echo "checked" ;} ?>>
                </div>
                
                <br>
                <input type="submit" class="mt-4" value="Gonder">
                
               </form>
            </div>

        </div>
    </div>

    
<?php include "views/_ckeditor.php";?>
<?php include "views/_footer.php";?>