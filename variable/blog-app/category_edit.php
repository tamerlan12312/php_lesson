<?php
    require "func_var/variable.php" ;    # variable
    include "func_var/functions.php" ;   # funksiyalar
    $id = $_GET["id"] ;

    $result = getCategoryById($id) ;
    $selectedCategory = mysqli_fetch_assoc($result) ;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $categoryname = $_POST["categoryname"];
        $active = isset($_POST["active"]) ? 1 : 0 ;

        if(editCategory($id,$categoryname,$active)){
            $_SESSION["message"] = $categoryname ."adli kateqori update olundu" ;
            $_SESSION["type"] = "warning" ;
            header ("Location: admin-categories.php") ;
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
                <input type="text" class="w-100" name="categoryname" value="<?php echo $selectedCategory["name"] ;?>">
                <br>
                <div class="form-check mt-3">
                <label for="" class="form-check-label">Active</label>
                <input type="checkbox" class="form-check-input " name="active" <?php if($selectedCategory["active"]) {echo "checked" ;} ?>>
                </div>
                <br>
                <input type="submit" class="mt-4" value="Gonder">
                
               </form>
            </div>

        </div>
    </div>
<?php include "views/_footer.php";?>