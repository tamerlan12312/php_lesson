<?php


  $a = 50 ;
  $b = 4 ;
  $c = 26 ;


  # 4. a nin 50-100 arasi yoxlayin
  # $yoxlanis = ($a > 50 and $a < 100);
  # echo var_dump($yoxlanis) ;  #true
  
  // $netice = ($a > 50 and $a < 100) ;

  // if ($netice) {
  //     echo "A 50-100 arasindadir" ;
  // } else {
  //     echo "A 50 - 100 arasinda deyil" ;
  // }

  # 5. a cutdu ya yox kontrolu
//    $yoxlanis = ($a > 0 and $a % 2 == 0 ) ;
//      if ($yoxlanis) {
//       echo "a cut ededdir" ;
//   } else {
//       echo "a cut eded deyildir" ;
//   }
  # echo var_dump($yoxlanis) ;

  # 7. a,b,c icin boyukdu ya kicikdir hesablayin
  # $yoxlanis = ($a > $b and $a > $c) ;
  # echo "en boyuk eded : ".(intval($yoxlanis)) ; # true yaxud false int kimi yazmaq isteiyirksek intval ist olunur
//   if ($a > $b and $a > $c) {
//     echo " a boyuk ededdir" ;
// } else if ($b > $a and $b > $c) {
//       echo " b boyuk ededdir" ;
//   }
//   else if ($c > $a and $c > $b) {
//     echo " c boyuk ededdir" ;
// } else {
//     echo "error" ;
// }

  /*
  8. 2 vize(%60) ve final (%40) qiymetine gore ortalama qiymeti hesabla
  a - eger netice 50 ve yuxaridirsa kecdi deyilse kesildi
  b - kecmek ucun ortalama 50 olsa bele final qiymeti en azi 50 olmalidir
  c - kecmek ucun finaldan 70 alinsa ortalamin deyeri olmasin
  */
  
   $vize1 = 40;
   $vize2 = 50;
   $final = 60;

   $ortalama = (($vize1 + $vize2 ) / 2) * 0.4 + ($final * 0.6) ;
    echo $ortalama ;
    # a 
   if ($ortalama >=50) {
    echo "imtahandan kecdi" ;
   }
 
  # $netice = ($ortalama >= 50 and $final =>50) ;
  # $netice = ($ortalama >= 50 or $final >=50) ;
  # echo "<br>" ;
  # echo "kecdi :".(intval($netice)) ;

?>