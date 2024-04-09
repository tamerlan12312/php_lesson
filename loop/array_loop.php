<?php

$fruits = array("Alma","Armud","Heyva","Nar") ;
for ($i = 0 ; $i < count($fruits) ; $i++){ # for dongusu ile
    echo $fruits[$i]."<br>" ;
}

$i = 0 ;

while ($i < count($fruits)){               # while dongusu ile
      echo $fruits[$i]."<br>" ;

      $i++ ;
}

$product = array(
    array("Iphone 11",7000),
    array("Iphone 12",8000),
    array("Iphone 13",9000),
) ;

for ($i=0; $i < count($product) ; $i++) { 
    echo "Model :"." ".$product[$i][0]." "."Qiymet"." ".$product[$i][1]."<br>" ;
} ;


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

$cars_keys = array_keys($cars); # burada indekse gore key i teyin edir ve key melumatini goturur

// print_r($cars_keys) ;

// echo "<br>" ;
// echo "<br>" ;

for ($i=0; $i < count($cars) ; $i++) { 
    //  echo $cars["K101"]["model"] ;         #  $cars["K101"]["model"] burada datada 2 dene oldugu ucun 2 eded opel elecekdir
     echo $cars[$cars_keys[$i]]["model"] ; # burada ise keysi 0 1 oldugu ucun 0ci indexde K101 gelir ve her ikisinin modeli gelecekdir
 }

?>