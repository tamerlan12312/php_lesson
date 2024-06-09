<?php

 function getData(){
   $myfile = fopen("db.json","r") ;
   $size   = filesize("db.json") ;
   $result = json_decode(fread($myfile,$size),true) ; # bu bize db.json datasini massiv seklinde getirecekdir
   fclose($myfile) ;
   # return $result["categories"] ; # bunu bele cagirsaq db.jsondaki kateqoriyalar gelecekdir
   # ondansa funksiyai cagirib getData()["categories"] daya uygundur butun datalar bu funksiyada olacaqdir
   return $result ; 
}

function createUser(string $name,string $email,string $username,string $password){
     $db = getData() ;
     array_push($db["users"],array(
      "id"=>count($db["users"]) + 1, # id her defe artacaqdir 4 5 6
      "name"=>$name,
      "username"=>$username,
      "password"=>$password,
      "email"=>$email
     )) ;
     $my_open_file  = fopen("db.json","w");
     fwrite($my_open_file,json_encode($db,JSON_PRETTY_PRINT)) ; 
     fclose($my_open_file) ;
}


function getUser(string $username){ # props ile username gelecek
       $users = getData()["users"] ; # getDatadan umumie users goturururk ve her birine catmaq ucun donguye saliriq
       foreach($users as $user){ 
           if ($user["username"] == $username) { #eger datadan gelen username props ile gelen usernameye beraberdirse return elesin
            return $user ;
           }
       }
       return null ;
}
 
function editBlog(int $id,string $title,string $desc,string $img,string $url,int $active){
   include "config_mysql.php" ;
 
   $query = "UPDATE blogs SET title='$title',description='$desc',imageUrl = '$img', url='$url', active=$active WHERE id=$id";
   $result = mysqli_query($connection,$query) ;
   echo mysqli_error($connection) ;
   return $result ; 


//  $db =getData() ;
//  foreach($db["movies"] as &$movie){ # burada original massivi update etmelidir & referansini alaraq kopyasini elemeyecekdir
//     if ($movie["id"] == $id) {
       
//       $movie["title"] = $title ;
//       $movie["description"] = $desc ;
//       $movie["image"] = $img ;
//       $movie["url"] = $url ;
//       $movie["active"] = $active ;
//       $myfile = fopen("db.json","w") ;
//       fwrite($myfile,json_encode($db,JSON_PRETTY_PRINT)) ;
//       fclose($myfile) ;

//       break ;
//     }
//  }
}

function deleteBlog(int $id) {
   include "config_mysql.php" ;
   $query = "DELETE FROM blogs WHERE id=$id" ;
   $result = mysqli_query($connection,$query) ;
   return $result ;
   mysqli_close($connection) ;
}

 function createBlog (string $title, string $description, string $img, string $url,int $active = 0){
   include "config_mysql.php" ;
   # MYSQL PREPARED
   $query = "INSERT INTO blogs(title,description,imageUrl,url,active) VALUES (?,?,?,?,?)" ;
   $result = mysqli_prepare($connection,$query) ;

   mysqli_stmt_bind_param($result,'ssssi', $title,$description,$img,$url,$active) ;
   mysqli_stmt_execute($result);
   mysqli_close($connection) ;

   return $result ;
   }

   function createCategory(string $categoryname){
    include "config_mysql.php" ;
    $query = "INSERT INTO categories(name) VALUES (?)";
    $result = mysqli_prepare($connection,$query) ;
    mysqli_stmt_bind_param($result,'s',$categoryname) ;
    mysqli_stmt_execute($result) ;
    mysqli_close($connection) ;
    
    return $result ;
   }

   function control_input ($data){
   // $data = strip_tags($data) ;  # SQL INJECTION // html etiketlerini yigisdirir
   $data = htmlspecialchars($data) ; # SQL INJECTION // html etiketlerini unicode cevirir
   $data = stripslashes($data) ; # SQL INJECTION // \\ tipli seyleri cixardir
   return $data ;
   }

   function getBlogs () {
      include "config_mysql.php" ;
      $query = "SELECT * from blogs" ;
      $result = mysqli_query($connection,$query) ;
      mysqli_close($connection) ;
      return $result ;
   }

   function getCategories(){
    include "config_mysql.php" ;
    $query = "SELECT * from categories" ;
    $result = mysqli_query($connection,$query) ;
    mysqli_close($connection);

    return $result ;
   }

   function getBlogById (int $movieId){
     include "config_mysql.php" ;

     $query = "SELECT * from blogs WHERE id='$movieId' " ;

     $result = mysqli_query($connection,$query) ;


     mysqli_close($connection) ;
     return $result ;
   }

   function getCategoryById(int $categoryId){
      include "config_mysql.php" ;
      $query = "SELECT * from categories WHERE id=$categoryId" ;
      $result = mysqli_query($connection,$query) ;
      mysqli_close($connection) ;
      return $result ;

   }

   function editCategory(int $id,string $categoryname,bool $active){
     include "config_mysql.php" ;
    $query = "UPDATE categories SET name=?,active=?  WHERE id=? " ;
    $result = mysqli_prepare($connection,$query) ;
    mysqli_stmt_bind_param($result,'sii',$categoryname,$active,$id) ;
    mysqli_stmt_execute($result) ;
    mysqli_close($connection);
    return $result ;
   }

   function deleteCategory (int $id){
   include "config_mysql.php" ;
   $query = "DELETE FROM categories WHERE id=$id" ;
   $result = mysqli_query($connection,$query) ;
   mysqli_close($connection) ;
   return $result ;

   }

  // filmArtir("Yeni Film 3","yeni description","3.jpeg") ;
   
  function filmleriGetir() {
     $myfile = fopen("data.txt","r") ;
     $list_arr = [] ;

     while(($item = fgets(($myfile))) !== false){
        $exploded_item = explode("|",$item) ; # her itemi ayirdi ve massiv qaytardi index[0] data.txtdeki siraya gore gedir
        array_push($list_arr,array(
           "baslik"=>$exploded_item[0],
           "aciklama"=>$exploded_item[1],
           "resim"=>$exploded_item[2],
           "url"=>$exploded_item[3],
           "yorumSayisi"=>$exploded_item[4],
           "begeniSayisi"=>$exploded_item[5],
           "vizyon"=>$exploded_item[6],
        )) ;

     }

     fclose($myfile);
     return $list_arr ;

  }



  function qisaDesc ($desc,$limit){
    if (strlen($desc) > $limit) {
      echo substr($desc,0,$limit)."...";
  } else {
      echo $desc;
  };
  }

?>