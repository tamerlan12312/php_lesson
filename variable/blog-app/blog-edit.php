<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar
    $id = $_GET["id"];
    $result = getBlogById($id);
    $selectedMovie = mysqli_fetch_assoc($result);    
    
    $categories = getCategories();
    $selectedCategories = getCategoriesByBlogId($id);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $description = control_input($_POST["desc"]);
        $imageUrl = $_POST["img"];
        $url = $_POST["url"];
        $categories = isset($_POST["categories"]) ? $_POST["categories"] : [];
        $isActive = isset($_POST["active"]) ? 1 : 0;
    
        if (editBlog($id, $title, $description, $imageUrl, $url, $isActive)) {
            clearBlogCategories($id); // clear blog categories
            if (count($categories) > 0) {
                addBlogToCategories($id, $categories); // add blog to categories
            }
            $_SESSION['message'] = $title . " isimli blog güncellendi.";
            $_SESSION['type'] = "success";
            header('Location: admin-blogs.php');
        } else {
            echo "hata: " . mysqli_error($connection);
        }
    }
    


?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
    <form method="POST">
        <div class="row">

            <div class="col-9">

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
                
        
            </div>

            <div class="col-3">
                    <?php
                    foreach($categories as $c): ?>
                    <div class="form-check">
                        <label for="category_<?php echo $c["name"] ;?>"><?php echo $c["name"] ;?></label>

                            <input 
                            type="checkbox" 
                            id="category_<?php echo $c["id"] ;?>" 
                            name="categories[]"
                            class="form-check-input" 
                            value="<?php echo $c["id"] ;?>"
                            <?php
                             $isChecked = false ;
                             foreach($selectedCategories as $s){
                              if ($s["id"] == $c["id"]) {
                                $isChecked = true ;
                              }
                            } ;

                            if ($isChecked) {
                              echo "checked" ;
                            }
                            ?>
                            >

                    </div>
    
                    <?php endforeach ;?>
            </div>

        </div>
        </form>
    </div>

    
<?php include "views/_ckeditor.php";?>
<?php include "views/_footer.php";?>