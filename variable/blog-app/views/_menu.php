<?php
$ozet = count($kategoriler) .' kategoride '.count($_SESSION["filmler"]). ' film listelenmiştir';
?>
       
       <div class="col-3">
                <ul class="list-group">
                    <?php
                        foreach($kategoriler as $kategori) {
                            echo '<li class="list-group-item">'.$kategori.'</li>';
                        };
                    ?>                   
                </ul>
            </div>