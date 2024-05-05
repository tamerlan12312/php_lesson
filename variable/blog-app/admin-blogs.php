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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width : 100px">Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width : 80px">Url</th>
                        <th style="width : 80px">Likes</th>
                        <th style="width : 80px">Comments</th>
                        <th style="width : 80px">Active</th>
                        <th style="width : 140px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(getData()["movies"] as $movie) :?>
                   <tr>
                    <td>
                        <img src="img/<?php echo $movie["image"]?>" alt="" class="img-fluid">
                    </td>
                    <td><?php echo $movie["title"] ;?></td>
                    <td><?php echo $movie["description"] ;?></td>
                    <td><?php echo $movie["url"] ;?></td>
                    <td><?php echo $movie["likes"] ;?></td>
                    <td><?php echo $movie["coments"] ;?></td>
                    <td>
                        <?php if($movie["active"]) :?>
                            <i class="fa-solid fa-check"></i>
                        <?php else :?>
                             <i class="fa-solid fa-xmark"></i>
                        <?php endif ;?>
                    </td>
                    <td>
                         <a class="btn  btn-warning btn-sm" href="blog-edit.php?id=<?php echo $movie["id"]?>">Edit</a>
                         <a class="btn  btn-danger btn-sm" href="blog-delete.php?id=<?php echo $movie["id"]?>">Delete</a>
                    </td>
                   </tr>
                    <?php endforeach ;?>    
                </tbody>
            </table>
           </div>
        </div>
    </div>
<?php include "views/_footer.php";?>