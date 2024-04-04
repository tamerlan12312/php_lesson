<?php 

echo "netice = ".(10+5)."<br>" ; #bele olduqda xeta bas verir string ile integer birlesdirmek olmur  (10+5) seklinde olar
# + - * / etmek mumkundur

$number1 = 10 ;
$number2 = 5 ;
$number3 = 2 ;

echo "netice = ".($number1 + $number2/$number3)."<br>" ; # 12.5 - birinci bolme sonra toplama olur ilk toplama olmasi ucun morterize icine almaq lazimdir
echo "netice = ".(($number1 + $number2)/$number3)."<br>" ; # bele olduqda 7.5 alinir
$intStr = (int)"20" ; # burada stringi int cevirdi ve asagida true qaytaracaq
echo is_int($intStr)."<br>" ; #is_int integer olub olmadigini yoxlayir 1 true qaytarir is_float qaliq olub olmadigini yoxlayir
echo var_dump(is_float(10.5))."<br>" ; # var_dump hem tipini hem de deyerini gosterir daha etrafli sekilde gettype ise sadece tipini

echo var_dump(is_numeric("2"))."<br>" ; # bu ise esas reqem olsun string yaxud integer baxmir
echo var_dump(abs(-20))."<br>" ; #bu ise musbete cevirir 
echo var_dump(ceil(2.2))."<br>" ; # yuxari yuvarlaqlasdirir 
echo var_dump(floor(2.9))."<br>" ; # asagi yuvarlaqlasdirir
echo var_dump(round(4.5))."<br>" ; #yuvarlaqlasdirir asagiya yaxindirsa asagi ve eksi
echo var_dump(sqrt(25))."<br>" ; #kvadratini cixarir netice - 5
echo var_dump(pow(2,3))."<br>" ; # buda eksi netice - 8
echo var_dump(max(2,3,6,20,185))."<br>" ; #maksimumu getirir
echo var_dump(min(2,3,6,20,185))."<br>" ; #minimumu getirir
?>