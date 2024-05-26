<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar

    $categoryname = "" ;
    $categoryname_err =  "" ;
     
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        //validate title

        $input_categoryname = trim($_POST["categoryname"]);

        if (empty($input_categoryname)) {
            $categoryname_err = "categoryname bos ola bilmez" ;
        } else if(strlen($input_categoryname) > 150){
             $categoryname_err = "Title cox boyukdur" ;
        }
        
        else {
            $categoryname = control_input($input_categoryname); 
        }

        if (empty($categoryname_err)) {
            if (createCategory($categoryname)) {
             $_SESSION["message"] = $categoryname ." adli kateqori elave olundu" ;
             $_SESSION["type"] = "success" ;
             header ("Location: admin-categories.php") ;
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
            <form  method="POST">
                <label for="">title :</label>
                <input type="text" class="w-100 form-control <?php echo (!empty($categoryname_err)) ? "is-invalid" : "" ;?>" name="categoryname" value="<?php echo $categoryname ;?>">
                <span class="invalid-feedback"><?php echo $categoryname_err ;?></span>
                <input type="submit" class="mt-4 btn btn-primary" value="Gonder">
               </form>
            </div>

        </div>
    </div>
<?php include "views/_footer.php";?>