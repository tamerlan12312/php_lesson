<?php
# eger eyni sehifede oldugu ucun ve post olmadigi ucun xeta verecekdir post olanda xeta qalxacaqdir bunun
# qarsinini bele almaq mumkundur
# empty deyiskenin bos olub olmadigini yoxlayir eger null,false,bos array, bos "" olanda true olacaqdir
# isset ise melumatin oldugunu yoxlayir null olarsa false olacaqdir
# $_SERVER["REQUEST_METHOD"] eyni sehifede post yaxud get olanda ist olunur xetanin qarsini alir
# post olduqda melumat gedecek olmadiqda ise xeta gorsenmeyecekdir
 
$adsoyad = $email = $password = $password2 = $sehir = $cinsiyyet = $textarea = "" ;
$hobiler = [] ;

// Error Message
$adsoyadErr = $emailErr = $passwordErr = $password2Err = $sehirErr = $cinsiyyetErr = $textareaErr = $hobilerErr  = "" ;

  function control_input($data){
      $data = trim($data) ; # bosluqlari kesir 
      $data = stripcslashes($data) ; # / | \ kimi xetleri varsa kesir
      $data = htmlspecialchars($data) ; # eger script kodu ile kimse kod daxil etse onun qarsiligini unicode cevirir
      return $data ;
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    if (empty($_POST["adsoyad"])) {
      $adsoyadErr = "Ad mecburidir" ;
    } else if(strlen($_POST["adsoyad"]) < 10){
         $adsoyadErr = "10dan kicik olmamalidir" ;
    } 
    else {
      $adsoyad = control_input($_POST["adsoyad"]) ; 
    }

    if (empty($_POST["email"])) {
      $emailErr = "email mecburidir" ;
    }  else {
     
      $email = $_POST["email"] ;
    }
    
    if (empty($_POST["password"])) {
          $passwordErr = "password mecburidir" ;
    }  else {
      $password = $_POST["password"] ;
    }
    
    if (empty($_POST["password2"])) {
          $password2Err = "password2 mecburidir" ;
    }  else {
      $password2 = $_POST["password2"] ;
    }

    if ($password != $password2) {
      $password2Err = "Şifrələr eyni deyil" ;
   }
 
      
    if (empty($_POST["sehir"])) {
          $sehirErr = "sehir mecburidir" ;
    }  else {
      $sehir = $_POST["sehir"] ;
    }
    
    if (empty($_POST["cinsiyyet"])) {
          $cinsiyyetErr = "cinsiyyet mecburidir" ;
    }  else {
      $cinsiyyet = $_POST["cinsiyyet"] ;
    }
    
    if (empty($_POST["textarea"])) {
          $textareaErr = "textarea mecburidir" ;
    }  else {
      $textarea = $_POST["textarea"] ;
    }
    

    if (!isset($_POST["hobi"])) { 
          $hobilerErr = "hobiler mecburidir" ;
    }  else {
      $hobiler = $_POST["hobi"] ;
    }

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


  #    echo  "<pre>" ;
  #    print_r($_POST); # bir basa ekranda gostermek olur
  }

?>


<form action="register.php" method="POST">
adiniz : <input type="text" name="adsoyad"  value="<?php echo $adsoyad ;?>"> 
<span style="color:red">
  <?php echo $adsoyadErr ;?> <br> <br>
</span>
email : <input type="text" name="email" value="<?php echo $email ;?>"> 
<span style="color:red">
  <?php echo $emailErr ;?> <br> <br>
</span>
şifrə : <input type="text" name="password" value="<?php echo $password ;?>">  
<span style="color:red">
  <?php echo $passwordErr ;?><br> <br>
</span>
şifrə tekrar: <input type="text" name="password2" value="<?php echo $password2 ;?>"> 
<span style="color:red">
  <?php echo $password2Err ;?> <br> <br>
</span>

şəhər :  <select name="sehir" id="" >  
  <option value="">Secin :</option>
     <option value="js" <?php if ($sehir == "js") {
      echo "selected" ;
     }?>>JavaScript</option>
     <option value="php" <?php if ($sehir == "php") {
      echo "selected" ;
     }?>>PHP</option>
     <option value="mySql" <?php if ($sehir == "mySql") {
      echo "selected" ;
     }?>>MySql</option>
</select>
<span style="color:red">
  <?php echo $sehirErr ;?>
</span>
<br> <br>
cinsiyyet : Kişi  : <input type="radio" name="cinsiyyet" id="" value="kisi"  <?php if ($cinsiyyet == "kisi") {
      echo "checked" ;
     }?>>
            Qadin  : <input type="radio" name="cinsiyyet" id="" value="qadin"  <?php if ($cinsiyyet == "qadin") {
      echo "checked" ;
     }?>>
<span style="color:red">
  <?php echo $cinsiyyetErr ;?>
</span>
            <br> <br>
hobbiler :
<input type="checkbox" name="hobi[]" id="" value="sinema" <?php if (isset($hobiler) and in_array("sinema",$hobiler)){echo "checked";}?>>Sinema
<input type="checkbox" name="hobi[]" id="" value="Idman" <?php if (isset($hobiler) and in_array("Idman",$hobiler)){echo "checked";}?>>Idman
<input type="checkbox" name="hobi[]" id="" value="Kitap oxumaq" <?php if (isset($hobiler) and in_array("Kitap oxumaq",$hobiler)){echo "checked";}?>>Kitap oxumaq
<span style="color:red">
  <?php echo $hobilerErr ;?>
</span>
<br> <br>

ozunuz haqqinda melumat :
<br> <br>
<textarea name="textarea"><?php echo $textarea ;?></textarea>
<span style="color:red">
  <?php echo $textareaErr ;?>
</span>
<br> <br>
<input type="submit" value="Qeydiyyat">

</form>