<?php
   $categories = ["Macera","Dram","Komedi","Korku"] ;

   array_push($categories,"Fantastika") ;
   sort($categories) ;

   $filmler = array(
    "1" => array(
       "title"=>"Paper Lives",
       "desc"=>"Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
       "img" => "3.jpeg",
       "comment" => "120",
       "like" => "100",
       "active" => "Hazırda",

    )
   ) ;

   # task yeni film elave ele 0-ci indexe

   $yeni_film =    array(
    "title"=>"New Movie",
    "desc"=>"Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
    "img" => "3.jpeg",
    "comment" => "120",
    "like" => "100",
    "active" => "Hazırda",

 ) ;

 $filmler["0"] = $yeni_film ;
 ksort($filmler) ;
 shuffle($filmler) ;

 print_r($filmler) ;





   #basqa bir variablede acmaq olar ama bele etdikde onun uzerine yazilir 

   #task 1 - butun herfleri kicik 1cinin bas herfi boyuk

   $filmler["1"]["title"] = strtolower($filmler["1"]["title"]) ; # ilk once butun herfleri kicik edirik
   $filmler["1"]["title"] = ucfirst($filmler["1"]["title"]) ; # daha sonra ilk herfi boyuk edirik

   #task 2 - 50 herfi gotur coxdursa noqteler ... qoysun

   $filmler["1"]["desc"] = substr($filmler["1"]["desc"],0,50)."... " ;
   #task 3 - filmin adini a teqi yazilsin ve klik etdikde urlde filmin adi olsun
   
   # $film1_url = "paper-lives" ; # bu sekilde elave etmek olur
   $film1_url = strtolower($filmler["1"]["title"]) ;
   $film1_url = str_replace([" "],["-"],$film1_url) ; # bu sekilde boslugu - ile evez eledik ve film1_urlde ise kicik herfler idi hamisi
   
   #task 4 - sabit ile deyer teyin et ve h1 teqine qoy
   define("basliq","Populyar Filmler") ;
   $kateqoriyaSayisi = count($categories) ;
   $filmSayisi = count($filmler) ;
  
   $yekun = "{$kateqoriyaSayisi} kateqoriyadan {$filmSayisi} film var "

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
      <div class="container my-5">
        <div class="row">
            <div class="col-3 mt-5">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $categories[0] ;?></li>
                    <li class="list-group-item"><?php echo $categories[1] ;?></li>
                    <li class="list-group-item"><?php echo $categories[2] ;?></li>
                    <li class="list-group-item"><?php echo $categories[3] ;?></li>
                    <li class="list-group-item"><?php echo $categories[4] ;?></li>
                </ul>
            </div>

            <div class="col-9">
              <h1>
                <?php echo basliq?>
              </h1>
              <p>
                <?php echo $yekun ;?>
              </p>
            <div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
    <?php echo "<img src=\"img/{$filmler["1"]["img"]}\" class=\"img-fluid rounded-start\">"  ?>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo "<a href=\"{$film1_url}\">{$filmler["1"]["title"]}</a>";?></h5>
        <p class="card-text"><?php echo  $filmler["1"]["desc"] ;?></p>
        <div class="d-flex ">
            <span class="badge bg-primary"><?php echo $filmler["1"]["comment"];?></span>
            <span class="badge bg-warning mx-3"><?php echo $filmler["1"]["like"] ;?></span>
            <span class="badge bg-danger"><?php echo $filmler["1"]["active"] ;?></span>
        </div>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
      </div>
</body>
</html>