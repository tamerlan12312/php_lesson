<?php
    require "func_var/variable.php" ;    # variable 
    include "func_var/functions.php" ;   # funksiyalar 
    
    if (!isset($_GET["id"]) or !is_numeric($_GET["id"])) {
        header('Location: index.php') ;
    }

    $result = getBlogById($_GET["id"]) ;
    $blog = mysqli_fetch_assoc($result) ;
    if (!$blog) {
        header('Location: index.php') ;
    }
?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0 justify-content-center">
    <div class="col-md-4">
      <img src="img/<?php echo $blog["imageUrl"];?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $blog["title"] ;?></h5>
        <p class="card-text"><?php echo $blog["description"] ;?></p>
      </div>
    </div>
  </div>
</div>
    </div>
<?php include "views/_footer.php";?>