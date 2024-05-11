<?php
# mysqli daha yaxsidir mysql birlesdirmek ucun
# 1ci sunucu adi 2 username 3 şifrə 4 baza adi
 $connect = mysqli_connect("localhost","root","","blogapp") ;
 
 mysqli_set_charset($connect,"UTF8") ; # xarakterleri desteklenmesi ucundur

 if (mysqli_connect_errno() > 0) { # eger xeta bas vererse bu kod ile olculur
    die("Xeta bas verdi: ".mysqli_connect_errno()) ; # xetani yazdirir
    # die eger truedursa diger kodlar islemeyecekdir
 }


 echo "Mysql connected ." ; 

  // sql sorgulari ucun yuxardakini ayrica yazib include dedeceyik

 mysqli_close($connect) ; # connect olduqdan sonra close elemey lazimdir bos yer tutmasin 


 echo "Mysql disconnected" ;

?>