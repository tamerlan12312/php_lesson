<?php 
     echo "<br>" ;
     $name = "Tamerlan";
     $last_name = "Farajullayev";
     $age = 25;
     
     $mesaj = "my name's {$name} last name {$last_name} and {$age} years old";  #eger tek dirnaq daxilinde yene tek dirnaq varsa \ - ters slash istifade olunur
     #cut dirnaqda normal qaydada olur
    //  $mesaj1 = "My name's"." ".$name." "."last name"." ".$last_name." "."and"." ".$age." "."years old"; #noqte ile birlesdirmek olar bu sekilde
    
    echo $mesaj[0]."<br>" ; # M herfi gelecek
    echo $mesaj[3]."<br>" ; # n nerfi gelecek 
    echo strlen($mesaj) ."<br>" ; # herf sayini gosterir - 58
    echo str_word_count($mesaj)."<br>" ; # soz sayini gosterir
    echo strtolower($mesaj)."<br>" ; # butun sozu kicik herfe cevirir
    echo strtoupper($mesaj)."<br>" ; # boyuk herfe cevirir
    echo ucfirst($mesaj)."<br>" ; # upper case first - ilk herfi boyuk yazir
    echo str_replace("Tamerlan","Tamer",$mesaj)."<br>" ; # 3 arquemtn qebul edir deyisdireceyimiz soz yazacagimiz soz ve hansi dəyişgende olacaq
    echo str_replace(["Tamerlan",25],["Tamer",24],$mesaj)."<br>"; # daha cox cox sozden ise massivden istifade olunur
    echo addcslashes($mesaj,"T")."<br>"; # 2 arqument alir 2ci arqumentde qabagina ters slash qoyur
    $pass = "Tamerlan" ;
    echo md5($pass)."<br>" ; # sözü şifrələyir - md5_file text faylini sifreleyir
    echo sha1($pass)."<br>" ; # sözü şifrələyir  sha1_file text faylini sifreleyir
    #substr metudu 3 arqument alir 1ci deyisgen 2ci hansi indeksden 3cu hansi indekse qeder kessin
    


?>





<?php

foreach ($filmler as $id => $film) {




echo   '<div class="card mb-3" >
    <div class="row g-0">
      <div class="col-md-4">
     <img src="img/'.$film["img"].'" class="img-fluid rounded-start"> 
      
     </div>
      <div class="col-md-8">
        <div class="card-body">

          <h5 class="card-title"><a href="'.$film1_url.'">'.$film["title"].'</a></h5>
         
          <p class="card-text">';


           
          
             if (strlen($film["desc"]) > limit) {
                echo substr($film["desc"],0,limit)."...";
             } else {
              echo  $film["desc"]  ;
             } ;
        
        
       echo '</p><div class="d-flex "> ' ;                  
            if ($film["comment"] > 0) {
             echo '<span class="badge bg-warning mx-3">Yorum :'.$film["comment"].'</span>' ;
            }

           echo  '<span class="badge bg-primary me-3">Beyenme :'.$film["like"].'</span> ' ;


           echo '<span class="badge bg-danger">Var' ;

              
           
                if ($film["active"] ) {
                  echo "Hazirda" ;
                } else {
                  echo "Hazirda yoxdur" ;
                }
              


            echo '</span>
          </div>
        </div>
      </div>
    </div>
  </div>' ;

 }
?>