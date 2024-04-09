<?php

// $fruits = array("Alma","Armud","Heyva","Nar") ;

// foreach($fruits as $fruit) { # fruits massivindeki deyerleri fruite elave edir
//     echo $fruit."<br>" ; 
// } ;


// $product = array(
//     array("Iphone 11",7000),
//     array("Iphone 12",8000),
//     array("Iphone 13",9000),
// ) ;

// foreach($product as $item) {
//     echo "Mehsul adi : "." ".$item[0]." Qiymeti : ".$item[1]."<br>" ;
// }

$cars = array(
    "K101" => array(
        "model"=>"opel",
        "il"=>"2020",
        "reng"=>"qirmizi",
        "qiymet"=>"15000",
    ),
    "K102" => array(
        "model"=>"toyota",
        "il"=>"2021",
        "reng"=>"goy",
        "qiymet"=>"20000",
    ),
) ;

foreach ($cars as $key => $value) {
    echo $key." ".$value["model"]."<br>"  ;
    # burada $key keyini goturur value ise valuesini istenilen ad qoymaq mumkundur
}

?>