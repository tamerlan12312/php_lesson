<?php

 function getData(){
   $myfile = fopen("db.json","r") ;
   $size   = filesize("db.json") ;
   $result = json_decode(fread($myfile,$size),true) ; # bu bize db.json datasini massiv seklinde getirecekdir
   fclose($myfile) ;
   # return $result["categories"] ; # bunu bele cagirsaq db.jsondaki kateqoriyalar gelecekdir
   # ondansa funksiyai cagirib getData()["categories"] daya uygundur butun datalar bu funksiyada olacaqdir
   return $result ; 
}
 


 function filmArtir (string $baslik, string $aciklama, string $resim, string $url, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $vizyon = false){
            $my_file  = fopen("data.txt","a") ;
            $items = $baslik."|".$aciklama."|".$resim."|".$url."|".$yorumSayisi."|".$begeniSayisi."|".(int)$vizyon;
            fwrite($my_file,$items."\n");
            fclose($my_file) ;
   }

  // filmArtir("Yeni Film 3","yeni description","3.jpeg") ;
   
  function filmleriGetir() {
     $myfile = fopen("data.txt","r") ;
     $list_arr = [] ;

     while(($item = fgets(($myfile))) !== false){
        $exploded_item = explode("|",$item) ; # her itemi ayirdi ve massiv qaytardi index[0] data.txtdeki siraya gore gedir
        array_push($list_arr,array(
           "baslik"=>$exploded_item[0],
           "aciklama"=>$exploded_item[1],
           "resim"=>$exploded_item[2],
           "url"=>$exploded_item[3],
           "yorumSayisi"=>$exploded_item[4],
           "begeniSayisi"=>$exploded_item[5],
           "vizyon"=>$exploded_item[6],
        )) ;

     }

     fclose($myfile);
     return $list_arr ;

  }



  function qisaDesc ($desc,$limit){
    if (strlen($desc) > $limit) {
      echo substr($desc,0,$limit)."...";
  } else {
      echo $desc;
  };
  }

?>