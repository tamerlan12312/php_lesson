<?php
 function filmArtir (&$filmler,string $baslik, string $aciklama, string $resim, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $vizyon = false){
           
    $yeni_film[count($filmler) + 1]=array (
      "baslik" => $baslik,
      "aciklama" => $aciklama,
      "resim" => $resim,
      "yorumSayisi" => $yorumSayisi,
      "begeniSayisi" => $begeniSayisi,
      "vizyon" => $vizyon,
      "url"=>"yeni-film-3"
    );

    $filmler = array_merge($filmler,$yeni_film) ;
   }

  filmArtir($filmler,"Yeni Film 3","yeni description","3.jpeg") ;

  function qisaDesc ($desc,$limit){
    if (strlen($desc) > $limit) {
      echo substr($desc,0,$limit)."...";
  } else {
      echo $desc;
  };
  }

?>