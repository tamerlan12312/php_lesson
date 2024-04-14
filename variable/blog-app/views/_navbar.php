<?php
   $notfound = "" ;
   if (!empty($_GET["q"])) {
    $keyword = $_GET["q"] ; # global scopdadi 
    $keyword = trim($keyword) ;
    // echo $keyword ;
   # $filmler- yeni bu massive axtarilan deyeri elave ediriky yeni deyisirik
   $filmler = array_filter($filmler,function ($film) use ($keyword){ # use globalda olan deyisgene catmaga imkan verir # 2 arqument alit massivi ve axtaracagi itemi #filmler massivi kopyalanir - $film
         return (stristr($film["baslik"],$keyword) or stristr($film["aciklama"],$keyword)) ; #stristr - string daxilinde stringi axtarir yeni baslikda sozu axtarir
    }) ;
   } 

   if (count($filmler) == 0) {
    $notfound = "melumat tapilmadi" ;
   }

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary navbar-dark ">
  <div class="container">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>

      <form class="d-flex" role="search" action="index.php" method="GET">
        <input class="form-control me-2" name="q" type="search"  placeholder="Search" aria-label="Search">
        <button class="btn btn-danger" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>