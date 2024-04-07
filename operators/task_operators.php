<?php
  # 1. a,b vurmagi ile a,b,c toplanmasi ferqi nedir ?
  $a = 50 ;
  $b = 4 ;
  $c = 26 ;

  # $netice = ($a * $b) - ($a+$b+$c) ;

  # echo $netice ; # 21

  # 2. a,b,c toplannmasinin modulu 3 cavabi nedir ?
    
  # $netice = ($a + $b + $c) % 3 ;
  # echo $netice ; # 1

  # 3. bnin c kvadratini hesablayin

  # $netice = $b ** $c ;
  # echo $netice ;

  # 4. a nin 50-100 arasi yoxlayin
  # $yoxlanis = ($a > 50 and $a < 100);
  # echo var_dump($yoxlanis) ;  #true

  # 5. a cutdu ya yox kontrolu
  # $yoxlanis = ($a > 0 and $a % 2 == 0 ) ;
  # echo var_dump($yoxlanis) ;
  
  # 6. username ve sifre girisini yoxla
  # $user_name = "Tamerlan";
  # $password = "admin";
  
  # $yoxlanis = ($user_name == "Tamerlan" and $password == "admin") ; # true
  # echo var_dump($yoxlanis) ;

  # 7. a,b,c icin boyukdu ya kicikdir hesablayin
  # $yoxlanis = ($a > $b and $a > $c) ;
  # echo "en boyuk eded : ".(intval($yoxlanis)) ; # true yaxud false int kimi yazmaq isteiyirksek intval ist olunur

  /*
  8. 2 vize(%60) ve final (%40) qiymetine gore ortalama qiymeti hesabla
  a - eger netice 50 ve yuxaridirsa kecdi deyilse kesildi
  b - kecmek ucun ortalama 50 olsa bele final qiymeti en azi 50 olmalidir
  c - kecmek ucun finaldan 70 alinsa ortalamin deyeri olmasin
  */
  
  # $vize1 = 40;
  # $vize2 = 50;
  # $final = 60;

  # $ortalama = (($vize1 + $vize2 ) / 2) * 0.4 + ($final * 0.6) ;
  # echo $ortalama ;
  # $netice = ($ortalama >= 50 and $final =>50) ;
  # $netice = ($ortalama >= 50 or $final >=50) ;
  # echo "<br>" ;
  # echo "kecdi :".(intval($netice)) ;
?>