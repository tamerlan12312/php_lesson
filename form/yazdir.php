<?php
# Global deyiskenler $_ ;
 
 $query = $_GET["q"] ;    # ?q=php&category=yazilim burada q=php
 $category = $_GET["category"] ; # burada ise category=yazilim 
 $age = $_GET["age"] ;

 if ($query == "" and $category == "" and $age == "") {
   header("Location: get.php"); # eger bosdursa bu sehifeye gedecekdir
    exit; 
 } else {
     echo $query."<br>".$category."<br>".$age ; # php ve yazilim gelecekdir
 }



?>