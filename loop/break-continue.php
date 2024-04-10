<?php

//  $mesaj = "Hello World" ;

//  for ($i = 0 ; $i <strlen($mesaj) ; $i++){
//     if ($mesaj[$i] == "W") {
//      #  break; # break ile kesili eger say 3e beraber olduqda 3e qeder yazacaqdir # H E L (baxşlanğıc 0cı index)
//        continue ; # bu ise hemin indexi yaxud herfi cixardiq qalanini tamamlayir
//     }
//     echo $mesaj[$i]."<br>" ;
//  }

# 1-100 arasi cut ededlerin cemini tap

$i = 1 ;
$cem = 0 ;

while ($i <=100) {
    $i++ ; # while dongusunde eger continue olarsa bu yuxarda olmalidir eks halda sonsuz donguye girer 
    if ($i % 2 === 1) { # burada tek ededleri continue vasitesi ile cixarirq ve gelen ededler cut ededler olacaqdir
        continue ;
    }
    $cem += $i ;
}
echo "cem".$cem."<br>" ;



?>