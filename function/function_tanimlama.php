<?php

function say_hello(){
    for ($i=0; $i < 10 ; $i++) {  # hemcinin belede
     echo "Helo world"."<br>" ;
    }
}
say_hello() ;

function topla() {
    $a = 10 ;
    $b = 20 ;
    echo $a + $b ;
}
topla() ;

// say_hello() ;


// for ($i=0; $i < 10 ; $i++) {  # bu terzde cagirmaq olur
//     say_hello() ;
// }

?>