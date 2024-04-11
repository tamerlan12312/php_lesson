<?php
 # 1. parametr olaraq gonderilen sozu gonderilen eded qeder ekranda yazdir
 function yazdir($string,$number){
    for ($i=0; $i < $number ; $i++) { 
         echo $string."<br>" ;
    }
 } ;

 echo yazdir("Tamerlan",5) ;

 # 2. duzbucaqli ucbucagin eni ve uzunlugunun hasili ve cevresi hesabla

 function duzbucaqli($a,$b){
       $enUzun = $a * $b ;
       $cevre = ($a + $b) * 2 ;
       return "cevresi {$cevre} en ve uzunlugu {$enUzun}" ;
 }

 echo duzbucaqli(4,5) ;

echo "<br>" ;
 # 3. Yazi Tura funksiyasini yaz 
 function yaziTura () {
    $random = rand(1,100) ;
    if ($random > 50) {
        return "Tura" ;
    } else {
        return "Yazi" ;
    }
 } 

 echo yaziTura() ;

 # 4. parametr olaraq gonderilen ededin tam bolenlerini bir massiv seklinde yazdir 

 function tamBolen($number){
    $tamBolenMassiv = array() ;
   for ($i=2; $i <$number ; $i++) { 
      if ($number % $i === 0) {
         array_push($tamBolenMassiv,$i) ;
      }
   }

    return $tamBolenMassiv ;
 } 

  print_r(tamBolen(20)) ;

?>