<?php

$username = "Tamerlan";
$pass = "admin" ;

$isLoggedIn = ($username == "Tamerlan" and  $pass == "admin") ;

if ($username == "Tamerlan" ) { # email sehvdirse Email yanlisdir else isleyecekdir
    if ($pass == "admin") { # password sehvdirse sifre yanlisdir isleyecekdir email true oldugu ucun bu kodu oxuyacaqdir
         echo "Xoş Gəldiz"; 
    }
    else {
        echo "Şifrə yanlışdır" ;
    }
}
 else {
    echo "Email yanlışdır" ;
 }



?>