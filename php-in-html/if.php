<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $isLoggedIn = true ;
    //   $isLoggedIn = false ;
    $role = 'admin';
    // $role = 'customer';

    ?>
    <ul>
        <li> <a href=""> Ana Sehife</a></li>
        <li> <a href=""> Mehsullar</a></li>

         <!-- Eger istifadeci daxil olmayibsa -->
         <?php if(!$isLoggedIn) :  # qosa noqte olmalidir ?>  
             
          <!-- eger if html kodunda ist etmek isteyiriksek ve html propertylerine catmaq isteyiriksek bele ist olunur -->

        <li> <a href="" > Daxil ol</a></li>
        <li> <a href=""> Qeydiyyatdan kec</a></li>
         
        
        <!-- Eger istifadeci daxil olubsa  -->
         <?php else :?>
            
        <li> <a href=""> Hesabim</a></li>
        
        <?php endif ;?>

        <!-- Admindirse gorsenecek deyilse gorsenmeyecek -->
        <?php if($isLoggedIn and $role == "admin") : ?>
        <li> <a href=""> Admin Panel</a></li>
        <?php endif ;?>
    </ul>
</body>
</html>