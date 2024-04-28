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

function createUser(string $name,string $email,string $username,string $password){
     $db = getData() ;
     array_push($db["users"],array(
      "id"=>count($db["users"]) + 1, # id her defe artacaqdir 4 5 6
      "name"=>$name,
      "username"=>$username,
      "password"=>$password,
      "email"=>$email
     )) ;
     $my_open_file  = fopen("db.json","w");
     fwrite($my_open_file,json_encode($db,JSON_PRETTY_PRINT)) ; 
     fclose($my_open_file) ;
}


function getUser(string $username){ # props ile username gelecek
       $users = getData()["users"] ; # getDatadan umumie users goturururk ve her birine catmaq ucun donguye saliriq
       foreach($users as $user){ 
           if ($user["username"] == $username) { #eger datadan gelen username props ile gelen usernameye beraberdirse return elesin
            return $user ;
           }
       }
       return null ;
}
 


 function createBlog (string $title, string $description, string $img, string $url, int $coments = 0, int $likes = 0){
   $db = getData() ;
   array_push($db["movies"],array(
    "id"=>count($db["movies"]) + 1, # id her defe artacaqdir 4 5 6
    "title"=>$title,
    "description"=>$description,
    "image"=>$img,
    "url"=>$url,
    "likes"=>$likes,
    "coments"=>$coments
   )) ;
   $my_open_file  = fopen("db.json","w");
   fwrite($my_open_file,json_encode($db,JSON_PRETTY_PRINT)) ; 
   fclose($my_open_file) ;
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