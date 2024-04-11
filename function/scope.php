<?php
// Global Scope
$x = 5 ;
$y = 10 ;

function test () {
    // Local scope
    # echo $x ;
    // $x = 10 ;
    // echo $x ;
    # Eger global deyiskeni localda cagirmaq ucun global - keyword-unden istifade etmek lazimdir
    # global $x,$y; # bele yazdiqda globali localda cagirmaq mumkundur
    #  return $x + $y ; 
    $GLOBALS["y"] = $GLOBALS["y"] + $GLOBALS["x"] ; # bu ise $y variableni deyisir cavab 15
}

echo $x ;
$netice = test() ;
// echo test() ; // undefined olacaqdir sebeb globalda teyin olunan variable localda cagrila bilmez
echo $y ; # xeta verecekdir x ve y undefined 
?>