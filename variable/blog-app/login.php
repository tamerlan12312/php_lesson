<?php
    require "func_var/variable.php" ;    # variable 
    include "func_var/functions.php" ;   # funksiyalar

   if (isset($_POST["login"]) and $_POST["login"] == "Daxil ol") {


       $username = $_POST["username"];
       $password = $_POST["password"];
       if ($username == user["username"] and $password == user["password"]) {
      

        setcookie("auth[username]",user["username"],time() + (60*60)); 
        setcookie("auth[name]",user["name"],time() + (60*60));
        header("Location:index.php") ;
      
    
    } else {
        echo "<div class='alert alert-danger text-center mb-0'>Username or Password is wrong</div>" ;
       }
   }

?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
           <div class="col-12">
           <form action="login.php" method="POST">
                <label for="username">Username :</label>
                <input type="text" class="w-100" name="username" placeholder="Username :">
                <br>
                <div class="mt-3">
                <label for="password">Password :</label>
                <input type="password" class="w-100" name="password" placeholder="Password :">
                <br>
                </div>
                <br>
                <input type="submit" name="login" class="mt-4" value="Daxil ol">
               </form>
            </div>
           </div>
        </div>
    </div>
<?php include "views/_footer.php";?>