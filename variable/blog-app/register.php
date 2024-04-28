<?php
    require "func_var/variable.php" ;    # variable 
    include "func_var/functions.php" ;   # funksiyalar

   if (isset($_POST["register"]) and $_POST["register"] == "Daxil ol") {

       $name     = $_POST["name"];
       $email    = $_POST["email"];
       $username = $_POST["username"];
       $password = $_POST["password"];

        if (empty($name) or empty($email) or empty($username) or empty($password)) {
            echo "<div class='alert alert-danger text-center mb-0'>Please Fill Input</div>" ;
            return; # eger sehvdirse asagidaki kodlarin islenmesinin qarsini alacaqdir
        }

       $user = getUser($username) ; #usernameni props ile otururuk getUser funksiyasina

       if (!is_null($user)) {
        echo "<div class='alert alert-danger text-center mb-0'>Username istifade edilib</div>" ;
        return;
       }

       createUser($name,$email,$username,$password) ;
       header("Location:login.php") ;

   }

?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
           <div class="col-12">
           <form action="register.php" method="POST">
                <label for="Name">Name :</label>
                <input type="text" class="w-100" name="name" placeholder="Name :">
                <br> <br>
                <label for="Email">Email :</label>
                <input type="text" class="w-100" name="email" placeholder="Email :">
                <br> <br>
                <label for="username">Username :</label>
                <input type="text" class="w-100" name="username" placeholder="Username :">
                <br>
                <div class="mt-3">
                <label for="password">Password :</label>
                <input type="password" class="w-100" name="password" placeholder="Password :">
                <br>
                </div>
                <br>
                <input type="submit" name="register" class="mt-4" value="Daxil ol">
               </form>
            </div>
           </div>
        </div>
    </div>
<?php include "views/_footer.php";?>