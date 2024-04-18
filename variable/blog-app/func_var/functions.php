<?php
 function filmArtir (string $baslik, string $aciklama, string $resim, string $url, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $vizyon = false){
            $my_file  = fopen("data.txt","a") ;
            $items = $baslik."|".$aciklama."|".$resim."|".$url."|".$yorumSayisi."|".$begeniSayisi."|".(int)$vizyon;
            fwrite($my_file,$items."\n");
            fclose($my_file) ;
   }

  // filmArtir("Yeni Film 3","yeni description","3.jpeg") ;

  function qisaDesc ($desc,$limit){
    if (strlen($desc) > $limit) {
      echo substr($desc,0,$limit)."...";
  } else {
      echo $desc;
  };
  }

?>