<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar
    $title = $description = $category = "" ;
    $title_err = $description_err = $category_err ="" ;
    $categories = getCategories() ;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //validate title

        $input_title = trim($_POST["title"]);

        if (empty($input_title)) {
            $title_err = "Title bos ola bilmez" ;
        } else if(strlen($input_title) > 150){
             $title_err = "Title cox boyukdur" ;
        }
        
        else {
            // $title = strip_tags($input_title) ; # 
            // $title = htmlspecialchars($input_title) ;
            $title = control_input($input_title); # sqle geden sorgulara mudaxile etmemek ucun ONEMLIDIR
            #stripslahess - bunlar sql injectionlardi kenardan  kod seklinde post gonderilenlerin qarsilarini alirlar
        }
      //validate description

      $input_desc = trim($_POST["desc"]);

      if (empty($input_desc)) {
          $description_err = "Desc bos ola bilmez" ;
      } else if(strlen($input_desc) < 10){
           $description_err = "Desc cox kicikdir" ;
      }
      else {
          $description = control_input($input_desc) ;
      }

        $select_category = $_POST["category"] ;
         if ($select_category == '0') {
            $category_err = "Kateqoriya secin" ;
         } else {
            $category = $_POST["category"] ;
         }
        $img = $_POST["img"];
        $url = $_POST["url"];
        
       echo $title ;
       echo "<br>";
       echo $description ;

        if (empty($title_err) and empty($description_err) and empty($category_err)) {
            if (createBlog($title,$description,$img,$url,$category)) {
             $_SESSION["message"] = $title ." adli bloq elave olundu" ;
             $_SESSION["type"] = "success" ;
             header ("Location: admin-blogs.php") ;
            }  else {
             echo "Xeta bas verdi" ;
            }
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
                <input type="text" class="w-100 form-control <?php echo (!empty($title_err)) ? "is-invalid" : "" ;?>" name="title" value="<?php echo $title ;?>">
                <span class="invalid-feedback"><?php echo $title_err ;?></span>
                <br>
                <div class="mt-3">
                <label for="">description :</label>
                <textarea name="desc" id="desc" cols="30" rows="10" class="w-100 form-control  <?php echo (!empty($description_err)) ? "is-invalid" : "" ;?>">
                       <?php echo $description; ?>
               </textarea>
                <span class="invalid-feedback"><?php echo $description_err ;?></span>    
            </div>

                <div class="mt-3">
                <label for="">image :</label>
                <input type="text" class="w-100" name="img">
                </div>
                <div class="mt-3">
                <label for="">url :</label>
                <input type="text" class="w-100" name="url">
                </div>
                <div class="mt-3">
                <label for="">Category :</label>

                <select name="category" id="category" class="form-select <?php echo (!empty($category_err)) ? "is-invalid" : "" ;?>">
                    <option value="0">Seçin :</option>
                    <?php foreach($categories as $c){
                        echo "<option value='{$c["id"]}'>{$c["name"]} </option>" ;
                    } ;?>   

                </select>
                <span class="invalid-feedback"><?php echo $category_err ;?></span>
                <script type="text/javascript">
                  document.getElementById("category").value = "<?php echo $category  ;?>"
                </script>
                </div>
                <br>
                <input type="submit" class="mt-4" value="Gonder">
                
               </form>
            </div>

        </div>
    </div>

<?php include "views/_ckeditor.php";?>
<?php include "views/_footer.php";?>