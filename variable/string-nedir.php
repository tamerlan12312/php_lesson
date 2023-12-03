<?php
 
    $name = "Tamerlan";
    $last_name = "Farajullayev" ; 
    $age = 24 ;


    $message = "my name's {$name} {$last_name} and {$age} years old." ;  
    // php kodun daha yaxsi oxumasi ucun buruq morterizeden istifade etmek uygundur
    // string daxiline deyisgen daxil etmek mumkundur
    // tek dirnaq daxilinde tek dirnaq yazanda onun oxunmasi ucun ters slash istifade etmek lazimdir - \
    // tek dirnaq olduqda deyisgeni oxumur cut dirnaq olduqda deyisgenin deyerini goturur
    // cut dirnaq olduqda ters slasha ehtiyac yoxdur 
    echo $message."<br>"                ;
    echo $message[0]."<br>"             ; //<br> - ile alt setire salir  // m
    // stringin deyerine indeks nomresine gore catmaq olur
    echo $message[1]."<br>"             ;// y

    echo strlen($message)."<br>"        ; //strlen () ile stringin sayini goturur - 50
    echo str_word_count($message)."<br>"; // nece soz oldugunu gosterir - 7
    echo strtolower($message)."<br>"    ; // butun herfleri kicik edir
    echo strtoupper($message)."<br>"    ; // butun herfleri boyuk edir
    echo ucfirst($message)."<br>"       ;  // bas herfi boyuk yazir
    echo ucwords($message)."<br>"       ; // her sozun bas herfi boyuk yazir
    echo str_replace(["Tamerlan",24],["Tamerlan 2",25],$message)."<br>" ; //sozu deyisir ilk hansi sozun deyisilmesi digeri yazidigimiz ve hansi variable oldugunu bildiririk
     //eger birden cox sozun deyisilmesini ucun massiv seklinde yazilir


?>