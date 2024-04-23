<?php
 
 # massivi stringe cevirib data kimi saxlamaq decodenin eksi
 $products = ["IPhone 10","Samsung S23 Ultra","Samsung A24"] ;

 echo "<br>" ;
 echo gettype($products);

//  $jsonData= json_encode($products) ; # encode stringe cevirdi ve fayla yukledi string sekilde

//  $myfile = fopen("products.json","w") ;
//  fwrite($myfile,$jsonData) ;

//  fclose($myfile) ;

 $user = array (
    "username" => "tamerlan",
    "password" => "tamerlan12312",
    "name"     => array(
      "name2" => "Tamerlan"
    )
 );

 $jsonUser = json_encode($user,JSON_PRETTY_PRINT) ; # JSON_PRETTY_PRINT - json faylinda kodun seliqeli gorsenmesi ucun 
 
 $myfile = fopen("users.json","w") ;
 
 fwrite($myfile,$jsonUser) ;

 fclose($myfile) ;
 
?>