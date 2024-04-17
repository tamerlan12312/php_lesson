<?php

# $my_file = fopen("yeni_file.txt","w") ; # w - fayli yaratdi kursor basdan basladi   # w+ yazmaq ve oxumaq ucundur
$my_file = fopen("yeni_file.txt","a+") ;   # a - fayli yaratdi kursor sondan basladi  # a+ yazmaq ve oxumaq ucundur
$str = "Tamerlan Farajullayev2\n" ; # w- modunda kursor basdan basladigi ucun deyisdikde evvelkinin uzerine yazilacaqdir yazir
# a modunda ise sondan basladigi ucun kursor sondan yazacaqdi uzerine yox \n o birsi setre kecir

fwrite($my_file,$str) ; # fayliya elave eledi - fwrite()
# fwrite($my_file,$str) ; # her defe cagirdiqda yenide w ile yaradilir ve yeniden elave edilir 

fseek($my_file,0) ; # a+ - kursor sondan basladigi ucun donguye girmir bununla kursor basdan baslayir donguye girir

while(!feof($my_file)){
  echo fgets($my_file)."<br>" ;
}


fclose($my_file) ; # fayli bagladi fclose()

// $my_file = fopen("yeni_file.txt","r") ;
// $file_size = filesize("yeni_file.txt") ;
// echo fread($my_file,$file_size) ;

?>