<?php

# 1 - (1-100) arasi reqemlerden 3e ve 5e bolunenleri yazdir

// $a = 1 ;

// while($a <= 100) {
//     if ($a % 3 == 0 and $a % 5 == 0) {
//         echo $a."<br>" ;
//     }
//     $a++ ;
// }

# 2 - (20-30) arasindaki tek ededlerin cemi nedir ?
// $a = 20 ;
// $cem = 0 ;
// while ($a <= 30) {
//     if ($a % 2 == 1) { # 1 tek ededlerdir 0 ise cut ededler gelecekdir
//          $cem += $a ;
//     }
//     $a++ ;
// }

// echo $cem."<br>" ;

# 3 - (100-10) arasindaki reqemleri yazdir
// $a = 100 ;

// while ($a >= 10) {
//     echo $a."<br>" ;
//     $a-- ;
// }


# 4 - (1-10) arasi random bir birinin oxsari olmuyan reqemler yarat

#in_array() - massivde deyerin olub olmadigini yoxlayir 2 arqument alir 1 axtarilan deyer 2 hansi yerde axtarilmalidir
#rand() - random reqemler yaradir

// $test = array("T","B","C",25) ;
// if (in_array("T",$test)) {
//     echo "Melumat Tapildı" ;  

// } else {
//     echo "Melumat Tapilmadi" ;  
// }

$list = array() ; # gelen data bura daxil olmalidir
while (count($list) != 5) { # daxil olan data 5e beraber olana qeder while dongusu davam edecek 5 olduqdq ise duracaq
    $reqem = rand(1,10);
    echo $reqem." " ; 
    if (!in_array($reqem,$list)) { # in_array() massivde o deyerin olub olmadigini yoxlayir
        array_push($list,$reqem) ; # 1-10arasi random reqemleri data 5e beraber olana qeder list massivine artirir
    }
}
print_r($list) ;
?>