<?php

 declare(strict_types=1) ; # eger bu olmasa string int cevirir ama biz funcda int qeyd etdiyimiz ucun fataly error verecekdir
 
 function  addNumbers (int $a, int $b,array $numbers) : float { # gelen deyerler int ve yaxud basqa type ola biler # int gelen deyerin int olmasini isteyir basqa cur olarsa xeta verecekdir
         return ($a + $b) + 1.2 ;
 }

 echo addNumbers(4,5,[10,20]) ; # burdaki parametr string olanda php onu int cevirir

?>