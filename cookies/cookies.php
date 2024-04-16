<?php
 # Kukilər serverdən browser-a göndərilərək istifadəçinin məlumatları yerli cihazında saxlanılır.
 # Bu məlumatlar sonradan eyni veb saytına daxil olduğunuzda tanınmağa imkan verir.

 setcookie("username","TamerlanFarajullayev",time() + (60 * 60 * 24 * 30)); # 1ayliq kuki
 setcookie("login","true",time() + (60 * 60 * 24 * 30)); # 1ayliq kuki
 setcookie("fullname","Tamerlan Farajullayev",time() + (60 * 60 * 24 * 30), "/cookies/admin"); # 1ayliq kuki


  if (isset($_COOKIE["fullname"])) {
      echo $_COOKIE["fullname"] ;
  } else {
    echo "cookie yoxdur" ;
  }

  # update
  setcookie("username","TamerlanFarajullayev2",time() + (60 * 60 * 24 * 30)); # value deyisdikde deyisir

  # delete
  setcookie("username","TamerlanFarajullayev",time() - 3600); # vaxti kecmiz kuki avtomatik silinir

  setcookie(
    "test",
    "Cookie var",
    time() + 1 # 1 saniye varsa gelecekdir ekrana yoxdursa gelmiyecekdir
  ) ;

  setcookie("test","Cookie var",time()-3600) ;
  setcookie("login","true",time()-3600) ;
  setcookie("fullname","Tamerlan Farajullayev",time()-3600,"/cookies/admin") ;


  setcookie("test2","Hello world",time() - 3600) ;

  echo $_COOKIE["test2"] ;

?>