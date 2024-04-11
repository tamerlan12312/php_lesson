<?php

function sayHello ($name){ # deyer bele oturulur
    return "Hello my friend {$name}"."<br>" ;
}


echo sayHello("Tamerlan") ;
echo sayHello("Farajullayev") ;

function topla($a,$b) {
    return $a + $b ;
}

echo topla(10,20) ;
echo topla(10,30) ;

echo "<br>" ;


function yasHesabla ($il) {
    return 2024 - $il ;
}

$netice = yasHesabla(1999) ;

echo $netice ;

echo "<br>" ;


function pensiyaQalanVaxt ($yas,$ad){
    $yash = yasHesabla($yas) ;
     
    $qalanVaxt = 65 - $yash ;

    if ($qalanVaxt > 0) {
        return "{$ad} pensiyaniza bu qeder {$qalanVaxt} il qaldi" ;
    } else {
        return "{$ad} tessufki ".($qalanVaxt*-1)." il pensiyadasiniz" ;
    }
    
}

$netice = pensiyaQalanVaxt(1999,"Tamerlan") ;
echo $netice ;
?>