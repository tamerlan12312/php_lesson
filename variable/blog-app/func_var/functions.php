<?php
 function filmArtir (string $baslik, string $aciklama, string $resim, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $vizyon = false){
           
    $yeni_film[count($_SESSION["filmler"]) + 1]=array (
      "baslik" => $baslik,
      "aciklama" => $aciklama,
      "resim" => $resim,
      "yorumSayisi" => $yorumSayisi,
      "begeniSayisi" => $begeniSayisi,
      "vizyon" => $vizyon,
      "url"=>"yeni-film-3"
    );

    $_SESSION["filmler"] = array_merge($_SESSION["filmler"],$yeni_film) ;
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