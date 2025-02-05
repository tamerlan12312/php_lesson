<?php
    require "func_var/variable.php" ;    # variable 
    include "func_var/functions.php" ;   # funksiyala
    
?>
<?php require "views/_header.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
          <?php include "views/_menu.php" ;?>
          <?php
const baslik = "Populyar Filmler" ;
?>


                <div class="col-9">
                <h1 class="mb-4"><?php echo baslik?></h1>
                <p class="text-muted">
                    <?php echo $ozet?>
                </p>

                <?php 
                 $result = getHomePageBlogs() ;
                               
                ?>

               <?php if(mysqli_num_rows($result) > 0) :?>

              <?php while($film = mysqli_fetch_assoc($result)) : ?>  
                      <?php if($film["active"]) :?>
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-fluid" src="img/<?php echo $film["imageUrl"]?>">                          
                                </div>
                                <div class="col-9">
                                    <div class="card-body">                        
                                        <h5 class="card-title"><a href="blog-details.php?id=<?php echo $film["id"];?>"><?php echo $film["title"] ;?></a></h5>
                                        <p class="card-text">
                                         <?php qisaDesc(htmlspecialchars_decode($film["description"]),200) ; ?> 
                                       </p><div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                 <?php endif ;?>
                 <?php endwhile ; ?>

               <?php else:?>
                <div class="alert alert-warning">Not result found</div>

                 <?php endif ;?>


            </div>
        </div>
    </div>
<?php include "views/_footer.php";?>