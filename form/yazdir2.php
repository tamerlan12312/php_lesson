<?php


$username = $_POST["username"];
$password = $_POST["password"];
$gizliPass = sha1($password) ; # kodu sifreledik md5 yaxud sha1 ile

 echo $username."<br>".$gizliPass."<br>"." Kodum ".$password ;
?>