<?php
$ozet = count($kategoriler) .' kategoride '.count(filmleriGetir()). ' film listelenmiştir';
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