<?php
const baslik = "Populyar Filmler" ;
?>


<div class="col-9">
                <h1 class="mb-4"><?php echo baslik?></h1>
                <p class="text-muted">
                    <?php echo $ozet?>
                </p>

                <?php foreach( getData()["movies"] as $id => $film) : ?>

                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-fluid" src="img/<?php echo $film["image"]?>">                          
                                </div>
                                <div class="col-9">
                                    <div class="card-body">                        
                                        <h5 class="card-title"><a href="<?php echo $film["url"]?>"><?php echo $film["title"] ;?></a></h5>
                                        <p class="card-text">
                                         <?php qisaDesc($film["description"],200) ; ?> 
                                       </p><div>
                                        <?php if ($film["coments"] > 0) : ?>
                                            <span class="badge bg-danger me-1"><?php echo $film["coments"]?> yorum</span>
                                       <?php endif ;?>
                                            <span class="badge bg-primary me-1"><?php echo$film["likes"];  ?> beğeni</span>
                                       </span>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                <?php endforeach ; ?>

                <h4 class="text-center">
                <?php echo $notfound ;?>
                </h4>

            </div>