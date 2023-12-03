<?php 
echo "netice=".(10+5)."<br>" ; // string ile int birlesende xeta verecekdir buna gore (10+5) yazmaq lazimdir
echo "netice=".(10-5)."<br>" ;
echo "netice=".(10*5)."<br>" ;
echo "netice=".(10/5)."<br>" ;

$number1 = 10 ;
$number2 = 5 ;
$number3 = 2 ;
// Variable ilede yazmaq mumkundur 
echo "netice=".($number1+$number2/$number3)."<br>" ; // number2/number3 oldugu ucun ilk once toplanma elemeke isteyiriksek morteriz icine salmaq lazimdir
// morterize icinde olanda 7.5 olmayanda ise 12.5 qiymetini aliriq
echo "netice=".($number1-$number2)."<br>" ;
echo "netice=".($number1*$number2)."<br>" ;
echo "netice=".($number1/$number2)."<br>" ;

//deyerleri int ve yaxud double oldugunu yoxlamaq ucun is_int() - istifade etmek olar

echo is_int($number1)."<br>" ; // true/false olaraq 1 ve yaxud 0 goturur
// var_dump ile ise tipini mueyyen etmek olar
echo var_dump(is_int(10.1))."<br>" ; // bool (true) verecekdir  int olmadigi ucun false verecekdir
echo var_dump(is_int("10"))."<br>" ; // string oldugu ucun false donderecekdir

echo var_dump(is_float(10.1))."<br>" ; //float true olacaqdi qaligi oldugu ucun
echo var_dump(is_double("10"))."<br>" ; // string oldugu ucun false hem float/double isletmek olar
echo var_dump(is_numeric("10"))."<br>" ; // burada ise hem int hem float hem stringi true goturur sadece herf olmamalidir onda false goturecekdir
echo abs(-10)."<br>" ; // menfini goturmur
echo ceil(4.1)."<br>" ; // yuxari yuvarlaqlasdirir - 5
echo floor(5.9)."<br>" ; // asagi yuvarlaqlasdirir - 5
echo round(5.4)."<br>" ; // hansina yaxindirsa ona yuvarlaqlasdirir burada 5 , 5.6 olduqda 6ya yuvarlaqlasdirir
echo sqrt(25)."<br>" ; //kvadratini goturur -5
echo pow(2,3)."<br>" ; // 2 ustu 3 demekdir 2*2*2 = 8 alinacaqdir
echo max(-10,2,5,1,50)."<br>" ; // maksimumu tapir
echo min(-1,2,5,1,50)."<br>" ;  // minimumu tapir

?>