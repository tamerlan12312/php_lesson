<?php
    require "func_var/variable.php" ; 
    include "func_var/functions.php" ; 

    $id=$_GET["id"] ;

    if (deleteCategory($id) ) {
        $_SESSION["message"] = $id ."id nomresi  bloq silindi" ;
        $_SESSION["type"] = "danger" ;
        header('Location: admin-categories.php') ;
    } else {
        echo "Xeta" ;
    }


 
?>