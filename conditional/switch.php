<?php

// $number = 5 ;

// switch ($number) { # key yazilir
//     case '3': # burada ise value yazilir
//         echo "3dur" ;
//         break; # break ile kesirik
//         case '4' ;
//         echo "4dur" ;
//     default: # eger hecbiri yoxdursa defaulta daxil olur
//      echo " bu eded yoxdur" ;
//         break;
// }


$bal = 100 ;
 switch ($bal) {
    case ($bal >=20 and $bal < 70):
       echo  "kecdin" ;
        break;
        case ($bal >=50 and $bal <= 100):
            echo "bravo" ;
            break;
    
    default:
       echo "kesildin" ;
        break;
 }


?>