<?php $ozet = count(getData()["categories"]) .' kategoride '.count(getData()["movies"]). ' film listelenmiştir';?>
    
       <div class="col-3">
                <ul class="list-group">
                    <?php $result = getCategories() ; while ($category = mysqli_fetch_assoc($result)) : ?>
                        <?php if($category["active"]):?>
                        <a href='<?php echo "blogs.php?categoryid=".$category["id"]?>' class="list-group-item list-group-item-action">
                         <?php echo ucfirst($category["name"]) ;?>
                        </a>
                        <?php endif ;?>
                        <?php endwhile ;?>
                </ul>
            </div>