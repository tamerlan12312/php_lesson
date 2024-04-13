<?php
# eger eyni sehifede oldugu ucun ve post olmadigi ucun xeta verecekdir post olanda xeta qalxacaqdir bunun
# qarsinini bele almaq mumkundur
  if ($_SERVER["REQUEST_METHOD"] == "POST") { # $_SERVER["REQUEST_METHOD"] eyni sehifede post yaxud get olanda ist olunur xetanin qarsini alir
      $adsoyad = $_POST["adsoyad"] ; # post olduqda melumat gedecek olmadiqda ise xeta gorsenmeyecekdir
      $email = $_POST["email"] ;
      $password = $_POST["password"] ;
      $password2 = $_POST["password2"] ;
      $sehir = $_POST["sehir"] ;
      $cinsiyyet = $_POST["cinsiyyet"] ;
      $hobiler = $_POST["hobi"] ;
      $textarea = $_POST["textarea"] ;


      echo $adsoyad ;
      echo "<br>";
      echo $email ;
      echo "<br>";
      echo $password ;
      echo "<br>";
      echo $password2 ;
      echo "<br>";
      echo $sehir ;
      echo "<br>";
      echo $cinsiyyet ;
      echo "<br>";
      foreach($hobiler as $hobi){
          echo $hobi ; # xeta verecekdir cunki hobi massiv seklindedir forEach ile etsek gelecekdir chekboxlar
      }
      echo "<br>";
      echo $textarea ;
      echo "<br>";

  #    echo  "<pre>" ;
  #    print_r($_POST); # bir basa ekranda gostermek olur
  }

?>


<form action="register.php" method="POST">
adiniz : <input type="text" name="adsoyad"> <br> <br>
email : <input type="text" name="email"> <br> <br>
şifrə : <input type="text" name="password"> <br> <br>
şifrə tekrar: <input type="text" name="password2"> <br> <br>

şəhər :  <select name="sehir" id=""> 
     <option value="js">JavaScript</option>
     <option value="php">PHP</option>
     <option value="mySql">MySql</option>
</select>
<br> <br>
cinsiyyet : Kişi  : <input type="radio" name="cinsiyyet" id="" value="kisi">
            Qadin  : <input type="radio" name="cinsiyyet" id="" value="qadin">
            <br> <br>
hobbiler :
<input type="checkbox" name="hobi[]" id="" value="sinema">Sinema
<input type="checkbox" name="hobi[]" id="" value="Idman">Idman
<input type="checkbox" name="hobi[]" id="" value="Kitap oxumaq">Kitap oxumaq
<br> <br>

ozunuz haqqinda melumat :
<br> <br>
<textarea name="textarea"></textarea>
<br> <br>
<input type="submit" value="Qeydiyyat">


</form>