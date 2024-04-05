<?php
# Task 1 - asagidakilari numeric array kimi yazin ve qiymetilerin ortalamasini hesabla
/*

 Iphone11 :7000,
 Iphone12 :8000,
 Samsung S20 :9000,

$mehsul_1 = array("Iphone11",7000);
$mehsul_2 = array("Iphone12",8000);
$mehsul_3 = array("Samsung S20",9000);

$price = ($mehsul_1[1] + $mehsul_2[1] + $mehsul_3[1]) / 3 ;

echo "Mehsulun ortalama qiymeti : {$price}" ; 8000

*/

$players = array(
    "ronaldo"=>array(
        "name"=>"Cristiano Ronaldo",
        "birthday"=>"1985",
        "history"=>array("Juventus","Real Madrid","Portugal")
    ),
    "messi"=>array(
        "name"=>"Lionel Messi",
        "birthday"=>"1987",
        "history"=>array("Barcelona","Argentina","Portugal")
    ),
) ;

echo print_r($players["messi"]["history"][0]) ;

?>