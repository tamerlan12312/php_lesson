<?php

/* 
 Menimsetme operatoru

 a = b    a = b
 a += b   a = a + b
 a -= b   a = a - b
 a *= b   a = a * b
 a /= b   a = a / b
 a %= b   a = a % b
 a **= b   a = a ** b
 a .= b   a = a . b stringi birlesdirir


*/

$a ;      # a = 10 kimi yazmaq olar
$a = 10 ; # yeniden teyin edib de yazmaq mumkundur
$b = 20 ;
$c = $a ;  # a deyisgenin qiymetini c-e menimsetdi
$d = ($a + 10) * 2 ;

//$a += 10 ; # burada 20 cixacaqdur cunki $a = a + x seklinde evvelki a = 10 oldugu ucun 10 + 10u $a-ya menimsetdi
$a += $b ;  # $a = $a + $b (10+20)
$a -= $b ;
$a *= $b ;
$a %= $b ;
$a **= $b ; # $a = $a ** $b
// echo $a ;
$c = "Tamerlan" ;
$d = " Farajullayev" ;

echo $c.=$d ; #Tamerlan Farajullayev


?>