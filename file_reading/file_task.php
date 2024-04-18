<?php

function file_add ($filename,$item,$price) { # fayl elave olunur ve yazilir
    $myfile = fopen($filename,"a") ;
    $product = $item." | ".$price ; # bir birindeni | ayirir ve ayri ayri adi ve qiymeti gotumek ucun explode ile ist olunur
    fwrite($myfile,$product."\n") ;
    fclose($myfile);
}


function file_reading ($file) {              # fayl oxunulur
 $myfile = fopen($file,"r");
 $exploded_file_arr = [] ;
 while (($item = fgets($myfile) )!== false) {
    $exploded_file = explode("|",$item);
    array_push($exploded_file_arr,$exploded_file) ;
    // print_r($exploded_file)."<br>";
 }
//  echo "<pre>" ;
// print_r($exploded_file_arr)  ;
fclose($myfile) ;
return $exploded_file_arr ;
}
file_add("products.txt","Samsung S23 Ultra","8000") ;
$file_func_arr = file_reading("products.txt") ; # return olunan deyer massivdir
foreach($file_func_arr as $item){
   echo "Phone : ".$item[0].": "."Price : ".$item[1]."<br>" ;
}

?>