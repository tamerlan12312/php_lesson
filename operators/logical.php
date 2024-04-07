<?php

/* 

 and   => x ve y true olduqda netice true olacaqdir
 or    =>  x ve yaxud y dan her hansi biri true olarsa netice true olacaqdir
 xor   => x ve yaxud ydan her hansi biri true  yaxud  ikiside false olarsa netice true olacaqdir 
 !     =>  xin tersini alir

*/

# and operatoru 

#true  ve true => true
#false  ve true => false / eger bir false varsa netice false
#false  ve false => false


$x = 14 ;

$netice = ($x > 5) ; # true
$netice = ($x < 15) ; # true

$netice = ($x > 5 and $x < 15) ; # false

$pass = 1 ;

$email = "farajullayevt@gmail.com" ;

$netice = ($pass > 0 and $email == "farajullayevt@gmail.com") ; # true

echo var_dump($netice) ;

# or operatoru 

#true  ve yaxud true => true
#false  ve yaxud true => true / eger bir true varsa netice true
#false  ve yaxud false => false


# xor operatoru 

#true  ve yaxud true => false / 2side truedurse false qaytarir xor operatoru
#false  ve yaxud true => true / eger bir true varsa netice true
#false  ve yaxud false => false
echo "<br>";
$x = 10;
$y = 20;
$netice = ($x == 10 xor $y == 20) ; # 2side true dursa false 1ri true 1ri false dursa true qaytarir
echo var_dump($netice) ;


# ! not operatoru

echo var_dump(!$x > 0) ; # true ama ! not operatoru ile false olur


?>