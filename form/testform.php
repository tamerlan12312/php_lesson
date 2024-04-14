<?php
    $ad = $soyad = $email = $password = $password2 = "" ;
    $prList = [] ;


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ad"])) {
         echo "Ad bos buraxila bilmez" ;
    } else {
        $ad = $_POST["ad"] ;
    }

    if (empty($_POST["soyad"])) {
         echo "soyad bos buraxila bilmez" ;
    } else {
        $soyad = $_POST["soyad"] ;
    }

    if (empty($_POST["email"])) {
         echo "email bos buraxila bilmez" ;
    } else {
        $email = $_POST["email"] ;
    }

    if (empty($_POST["password"])) {
         echo "password bos buraxila bilmez" ;
    } else {
        $password = $_POST["password"] ;
    }
    
    if (empty($_POST["password2"])) {
         echo "password2 bos buraxila bilmez" ;
    } else {
        $password2 = $_POST["password2"] ;
    }
    
    if (!isset($_POST["pr"])) {
        echo "DIl bos ola bilmez" ;
    }else {
        $prList = $_POST["pr"] ;
    }
    $soyad = $_POST["soyad"] ;
    $email = $_POST["email"] ;
    $password = $_POST["password"] ;
    $password2 = $_POST["password2"] ;


 
    echo $ad;
    echo "<br>" ;
    echo $soyad;
    echo "<br>" ;
    echo $email;
    echo "<br>" ;
    echo $password;
    echo "<br>" ;
    echo $password2;
    echo "<br>" ;
    foreach ($prList as $pr){
        echo $pr;
    }
    echo "<br>" ;
  }

 

?>


<form action="testform.php" method="POST">
    <label for="">Ad :</label>
    <input type="text" name="ad">
    <br> <br>
    <label for="">Soyad :</label>
    <input type="text" name="soyad">
    <br> <br>
    <label for="">Email :</label>
    <input type="text" name="email">
    <br> <br>
    <label for="">Password :</label>
    <input type="text" name="password">
    <br> <br>
    <label for="">Password Tekrar :</label>
    <input type="text" name="password2">
    <br> <br>
    <input type="checkbox" name="pr[]" id="" value="PHP">PHP
    <br> <br>
    <input type="checkbox" name="pr[]" id="" value="JAVASCRIPT">JAVASCRIPT
    <br> <br>
    <input type="checkbox" name="pr[]" id="" value="REACT">REACT
    <br>
    <input type="submit" value="Göndər">
</form>