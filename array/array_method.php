<?php

$number = array(1,5,7,2,4,29,8,23,34) ;
$strings = array("Tamerlan","Farajullayev","Əsəd","Nürəddin","Miryaqub") ;
$users = array("Tamerlan"=>"25","Farajullayev"=>"35","Developer"=>"34") ;

// #count data sayini  goturur
// echo count($number)."<br>";
// echo count($strings)."<br>";
// echo count($users)."<br>";

// # Qiymet artan sira
// sort($number) ;  
// print_r($number)."<br>" ;
// echo "<br>" ;

// asort($users) ; # bu assosiativ arrayde value gore siralanir 
// #azalmasini isteyiriksek arsort()
// ksort($users) ; # burda ise key gore siralanir - burada ise krsort() olacaqdir

// print_r($users) ;
// # Qiymet azalan sira
// echo "<br>" ;
// rsort($number) ;  #reversesort -rsort
// print_r($number)."<br>" ;
// echo "<br>" ;
// # Herfler alfabetik sira ile
// echo "<br>" ;
// sort($strings); #rsort olanda eksine olacaq alfabetik sira
// print_r($strings)."<br>" ;


 # string to array
  
 $string = "tamerlan/farajullayev/developer" ;

 $string_to_arr = explode("/",$string) ;

 #array to string

 $array = ["Tamerlan","Farajullayev","25"] ;

 $array_to_string = implode("/",$array) ;  //Tamerlan/Farajullayev/25

 print_r($array_to_string) ;

 # random yerlesdirir

 echo "<br>" ;
 print_r($strings) ;
 echo "<br>" ;
 shuffle($strings) ; # yerlerini her refleshde deyisir
 print_r($strings) ;
 echo "<br>" ;
 
 # massiv birlesdirme

 $array1 = ["1","2","3"] ;
 $array2 = ["4","5","6"] ;

 $arrCombine=array_combine($array1,$array2) ; # datanin sirasina gore bir biri ile birlesdirir key-value

print_r($arrCombine) ;
echo "<br>" ;
$array3 = ["Turkiye","Azerbaycan","Dubai"] ;
$array4 = ["Ukranya","Fransa","Rusiya"] ;
$arrMerge=array_merge($array3,$array4) ;  # numeric array kimi birlesdirir
echo "<br>" ;
print_r($arrMerge) ;

# tekrarlanan elemet sayi

$array3 = ["Turkiye","Azerbaycan","Dubai","Dubai","Turkiye","Azerbaycan","Azerbaycan"] ;

$arrCount = array_count_values ($array3) ;

print_r($arrCount) ; //Turkiye 2 Azerbaycan 3 Dubai 2

# array_shift sonuna element artirir array_unshift evveline element axtarir


?>