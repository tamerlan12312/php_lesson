<?php $ozet = count(getData()["categories"]) .' kategoride '.count(getData()["movies"]). ' film listelenmiştir';?>
<?php 
if(isset($_GET["categoryid"]) and is_numeric($_GET["categoryid"])){
  $selectedid = $_GET["categoryid"] ;
}
?>
       <div class="col-3">
                <ul class="list-group">
                    <?php $result = getCategories() ; while ($category = mysqli_fetch_assoc($result)) : ?>
                        <?php if($category["active"]):?>
                        <a href='<?php echo "blogs.php?categoryid=".$category["id"]?>' class="list-group-item list-group-item-action <?php if ( $category["id"] == $selectedid) {
                        echo "active" ;
                        }  ?>">
                         <?php echo ucfirst($category["name"]) ;?>
                        </a>
                        <?php endif ;?>
                        <?php endwhile ;?>
                </ul>
            </div>