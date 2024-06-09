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
                <a href="blog-create.php" class="btn btn-primary"> 
                    New Blog
                </a>
            </div>
           </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width : 100px">Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th style="width : 80px">Url</th>
                        <th style="width : 80px">Active</th>
                        <th style="width : 140px"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $result = getBlogs() ; while($film = mysqli_fetch_assoc($result)) :?>
                   <tr>
                    <td>
                        <img src="img/<?php echo $film["imageUrl"]?>" alt="" class="img-fluid">
                    </td>
                    <td><?php echo $film["title"] ;?></td>
                    <td><?php echo htmlspecialchars_decode($film["description"]) ;?></td>
                    <td><?php echo $film["url"] ;?></td>
                    <td>
                        <?php if($film["active"]) :?>
                            <i class="fa-solid fa-check"></i>
                        <?php else :?>
                             <i class="fa-solid fa-xmark"></i>
                        <?php endif ;?>
                    </td>
                    <td>
                         <a class="btn  btn-warning btn-sm" href="blog-edit.php?id=<?php echo $film["id"]?>">Edit</a>
                         <a class="btn  btn-danger btn-sm" href="blog-delete.php?id=<?php echo $film["id"]?>">Delete</a>
                    </td>
                   </tr>
                    <?php endwhile ;?>    
                </tbody>
            </table>
           </div>
        </div>
    </div>
<?php include "views/_footer.php";?>