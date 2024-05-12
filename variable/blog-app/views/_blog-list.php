<?php
const baslik = "Populyar Filmler" ;
?>


<div class="col-9">
                <h1 class="mb-4"><?php echo baslik?></h1>
                <p class="text-muted">
                    <?php echo $ozet?>
                </p>

                <?php $result = getBlogs() ; while ($film = mysqli_fetch_assoc($result)) : ?>
                <?php if($film["active"]) :?>
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-fluid" src="img/<?php echo $film["imageUrl"]?>">                          
                                </div>
                                <div class="col-9">
                                    <div class="card-body">                        
                                        <h5 class="card-title"><a href="<?php echo $film["url"]?>"><?php echo $film["title"] ;?></a></h5>
                                        <p class="card-text">
                                         <?php qisaDesc($film["description"],200) ; ?> 
                                       </p><div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                 <?php endif ;?>
                <?php endwhile ; ?>

                <h4 class="text-center">
                <?php echo $notfound ;?>
                </h4>

            </div>