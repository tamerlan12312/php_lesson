<?php
 # her variable uygun deyer teyin etmeden bir massiv sekilde istenilen qeder gondermek ucun

 $list = array(10,10,20) ; # istenilen qeder artiqdida n sayda parametr gedecek funksiyaya

 function topla($lists){
     $toplama = 0 ;
     foreach($lists as $list ){
            $toplama += $list ;
     }
     return $toplama ;
 }

 echo topla($list) ;

 echo "<br>" ;


 #massiv sekilde yox spread operatoru ilede gondermek mumkundur ... spread operator

 function toplamaq (...$numbers){
        $topla = 0 ;
        foreach($numbers as $number){
               $topla += $number ;
        }
        return $topla ;
 }

 echo toplamaq(10,20) ; # yazilan element daxilinde forEach ile donderib toplaya elave edecekdir

echo "<br>" ;

 function changeMethod ($transform,...$strings){
    $str = '';
    foreach ($strings as $s) { # burada $s her bir herfin indexini tesvir edir
         $str .= $s ;
    }
    return $transform($str) ;

 }

 echo changeMethod('strtoupper','Tamerlan ',' Farajullayev') ; # hamisini boyuk edecekdir

?>