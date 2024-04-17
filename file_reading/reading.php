<?php
# file acmaq fopen("faylin yolu","fayli acmaq modu")
# r - Fayli oxumaq modunda acir.Kursor en basindan baslayir

# w -fayla yazmaq modunda acilir .Kursor en basdan baslayir yeni herf yaxud soz elave etdikde en basdan basladigi ucun onun yerine
# elave edecekdir yeni silib yazacaqdir
# w+ - fayla yazmaq ve oxumaq modunda acilir.Kursor sondan basladigi ucun silmeyecekdir yenisini elave edende 

# a - fayla yazmaq modunda acilir.Kursor sondan basladigi ucun silmeyecekdir yenisini elave edende 
# a+ - fayla yazmaq ve oxumaq modunda acilir.Kursor sondan basladigi ucun silmeyecekdir yenisini elave edende 








# echo readfile("file.txt"); # php React JavaScrip22 - cixacaqdir her bir index bir bayt verecekdir 22 cixacaqdir

$my_file = fopen("file.txt","r") ; # fayli acir ve r modunda oxuyur r modunda kursor en basdan baslayir
$file_size = filesize("file.txt") ; # hamisini goturur
# echo fread($my_file,15) # fayli gosterir ve nece bayt oldugunu qeyd edirik
# echo fread($my_file,$file_size) ; # fayli gosterir ve nece bayt oldugunu qeyd edirik
echo "<br>"; 
# echo fgets($my_file) ; # setr ve setr  oxuyur php 
# echo fgets($my_file) ; # setr ve setr  oxuyur React
# echo fgets($my_file) ; # setr ve setr  oxuyur JavaScript

while (!feof($my_file)) { # feof donguye salir fayli ve sonuncuya qeder gosterir
    echo fgets($my_file)."<br>" ;
}

fclose($my_file) ; # burada streami baglayiriq 

?>