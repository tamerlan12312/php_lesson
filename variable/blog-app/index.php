<?php
   #Kategori
   $kategori1 = "Macera";
   $kategori2 = "Dram";
   $kategori3 = "Komedi";
   $kategori4 = "Korku";

   #Film haqqinda
   $film1_adi = "Paper Lives" ;
   $film1_desc = " Kağıt toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)";
   $film1_img = "1.jpeg" ;

   #Şərh
   $film1_comment = 105 ;
   $film1_like = 100 ;
   $film1_cinema = "sinemada" ; 

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
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori1 ;?></li>
                    <li class="list-group-item"><?php echo $kategori2 ;?></li>
                    <li class="list-group-item"><?php echo $kategori3 ;?></li>
                    <li class="list-group-item"><?php echo $kategori4 ;?></li>
                </ul>
            </div>

            <div class="col-9">
            <div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
        <!-- Asadigda escape () kimi gedir 
      \ - ters slash ile yazilir dirnaqdan evvel yazilir bele sekil elave olunur
      img sekil elave etmek hem bucur 
      <?php echo "<img src=\"img/{$film1_img}\" class=\"img-fluid rounded-start\">"  ?>
      hemde bucur etmek olar 
       <img src="<?php echo $film1_img?>" class="img-fluid rounded-start">
    -->

    <?php echo "<img src=\"img/{$film1_img}\" class=\"img-fluid rounded-start\">"  ?>

  
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $film1_adi ;?></h5>
        <p class="card-text"><?php echo $film1_desc ;?></p>
        <div class="d-flex ">
            <span class="badge bg-primary"><?php echo $film1_comment ;?></span>
            <span class="badge bg-warning mx-3"><?php echo $film1_like ;?></span>
            <span class="badge bg-danger"><?php echo $film1_cinema ;?></span>
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