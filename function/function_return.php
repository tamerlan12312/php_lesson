<?php

 function topla() {
    return 10 + 30 ;  # deyeri dondurur deyiskene elave edir
 }


//  function topla() {
//     echo 10 + 30 ;  # deyeri ekrana yazdirir deyisgene elave etmir
//  }


//  echo  topla() + 20; # seklindede yazmaq olar



# bu tipde yazmaq mumkundur funk teyin edib hemin funku basqasinin daxilinde cagirmaq ve ist etmek

function saat(){
    return date("h");
}

function sayHello(){
    if (saat() < 12) {
        return "good morning";
    }
     else {
        return "good afternon";
     }
}

echo sayHello() ;

function indi(){
    return date("Y") ;
}

function yasHesabla() {
    return indi() - 1999 ;
}

$netice = yasHesabla() ;
echo $netice ;

?>