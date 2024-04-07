<?php

/*

 ==     Equal                    $x == $y
 ===    Identical                $x === $y # hem value hemde tipleri beraber olmalidir
 !=     Not equal                $x != $y
 <>     Not equal                $x <> $y eger beraberdirse false deyilse true
 !==    Not identical            $x !== $y
 >      Greater than             $x > $y
 <      Less than                $x < $y
 >=     Greater than or equal to $x >= $y
 <=     Less than or equal to    $x <= $y
 <=>    Spaceship                $x <=> $y


*/

 $a = 5 ;
 $b = 5 ;
 $c = 20 ;
 $d = 4 ;
 $username = "Tamerlan" ;


 $netice = ($a == $b) ; # 1 qaytardi yemi true boolean
 $netice = ($a != $b) ; # a b-e beraber deyil (false)
 $netice = ($username == "Tamerlan") ; # true
 $netice = ($username != "Tamerlan") ; # false
 $netice = ($a === $b) ; # tipinede baxir false
 $netice = ($a !== $b) ; # tipinede baxir true
 $netice = ($a > $b) ; # false
 $netice = ($a >= $b) ; # true
 $netice = ($a <= $b) ; # true
 $netice = ($a < $b) ; # false  
 $netice = ($a <=> $b) ; # a ve cnin beraberliyine baxir geriye integer qaytarir   eger beraberdirse 0 qaytarir
 $netice = ($a <=> $c) ;  # anin deyeri c den kicik oldugu ucun -1 qaytarir sag teref soldan boyuk oldugu ucun eksine olduqda 1
 echo $netice ; 

?>