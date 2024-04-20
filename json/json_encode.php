<?php
 
 # massivi stringe cevirib data kimi saxlamaq decodenin eksi
 $products = ["IPhone 10","Samsung S23 Ultra","Samsung A24"] ;

 echo "<br>" ;
 echo gettype($products);

 $jsonData= json_encode($products) ; # encode stringe cevirdi ve fayla yukledi string sekilde

 $myfile = fopen("products.json","w") ;
 fwrite($myfile,$jsonData) ;


?>