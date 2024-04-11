<?php
 
    # referans original deyeri deyismek ucun ist olunur & yazaraq parametr qarşısına
    # yazmasaq onun kopyasini deyisir originalini yox
    # & referans alir original deyiskeni hem kopyasi deyisir hem originali
    function addFive (&$number) {
        $number += 5 ;
        echo $number ; # burada 15 olacaqdir
    } 

    $originalNumber = 10 ;
    addFive($originalNumber) ; # value olaraq gonderir yeni kopyasini $number parametre gedir yeni deyer kimi
    echo "<br>";
    
    echo $originalNumber ;

    $list = array(1999,1995,2000) ;

    function ageCal(&$tarixler){ # & original massivi deyisdirdi
        for ($i=0; $i <count($tarixler) ; $i++) { 
            $tarixler[$i] = 2024 - $tarixler[$i] ;
        }
        return $tarixler ;
    }

    print_r($list) ; # original Massiv
    print_r(ageCal($list)) ; # kopyasini yeni massiv seklinde getirdi ve deyisdirdi
    print_r($list) ; # original Massivi deyisdirildi & parametrde oldugu ucun

?>