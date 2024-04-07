<?php
/*
  + toplama
  - çıxma 
  * vurma
  / bolme
  % qaliq alma
  ** kvadrati alma
  ++$x - birinci toplanir   -  increment/decrement operatorlaridir bunlar
  $x++ - birinci kohne qiymet gorsenir daha sonra yeni qiymet
  --$x
  $x--


*/

$a = 10 ;
$b = 5 ;
echo $a + $b ;
echo "<br>" ;

echo $a - $b ;
echo "<br>" ;

echo $a * $b ;
echo "<br>" ;

echo $a / $b ;
echo "<br>" ;

echo $a % $b ;
echo "<br>" ;


echo $a ** $b ; #10un kvadrati 10u 5 defe vurur oz ozne
echo "<br>" ;

echo ++$a ; # birinci toplandigini gosterdi
echo "<br>" ;

echo $a++ ; # burada yene 11 gorsenir ama a ni yenide cagirdiqda 12 gosterecekdir
echo "<br>" ;

echo $a ; # artiq 12 gosterecekdir

?>