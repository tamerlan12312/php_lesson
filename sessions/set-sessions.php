<?php

# Əvvəlcədən, kukilərlə (cookies) müqayisədə, sessiyalar (sessions) server tərəfində saxlanılır və məlumatlar istifadəçinin browseri ilə hər hansı bir şəkildə paylaşılmır

session_start() ; # session bele basladilir oz ozle basladilmir

 $_SESSION["username"] = "Tamerlan"; # melumat sessionsdadi
 $_SESSION["password"] = "123" ;     # melumat sessionsdadi


 # unset($_SESSION["username"]) ; # unset sessiondaki secilen melumati silecekdir

 # session_unset() ; # sessionda olan butun melumatlari silecekdir

 # session_destroy();  # umumi sessionu siler 1 muddet sonra silecekdir

 # $_SESSION = [] ; # bu ise eyni anda silir gozlemir

 if (isset($_SESSION["username"])) {
     echo $_SESSION["username"];
 } else {
    echo "username yoxdur" ;
 }

 echo "<br>" ;
 echo $_SESSION["password"];



?>