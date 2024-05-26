<?php
    require "func_var/variable.php" ;     
    include "func_var/functions.php" ;   
    
?>
<?php require "views/_header.php" ;?>
<?php require "views/_message.php" ;?>
<?php require "views/_navbar.php" ;?>
    <div class="container my-5">
        <div class="row">
           <div class="col-12 ">

           <div class="card mb-1">
            <div class="card-body">
                <a href="category-create.php" class="btn btn-primary"> 
                    New Category
                </a>
            </div>
           </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width : 100px">Id</th>
                        <th>Category Name</th>
                        <th style="width:130px">is Active</th>
                        <th style="width : 140px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $result = getCategories() ; while($item = mysqli_fetch_assoc($result)) :?>
                   <tr>
                    <td><?php echo $item["id"] ;?></td>
                    <td><?php echo $item["name"] ;?></td>
                    <td>
                        <?php if($item["active"]):?>
                            <i class="fa-solid fa-check"></i>
                        <?php else :?>
                            <i class="fa-solid fa-xmark"></i>
                         <?php endif ;?>   
                    </td>
                    <td>
                         <a class="btn  btn-warning btn-sm" href="category_edit.php?id=<?php echo $item["id"]?>">Edit</a>
                         <a class="btn  btn-danger btn-sm" href="category_delete.php?id=<?php echo $item["id"]?>">Delete</a>
                    </td>
                   </tr>
                    <?php endwhile ;?>    
                </tbody>
            </table>
           </div>
        </div>
    </div>
<?php include "views/_footer.php";?>