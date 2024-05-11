<?php

$connect = mysqli_connect("localhost","root","","blogapp") ;

mysqli_set_charset($connect,"UTF8") ;

if (mysqli_connect_errno() > 0) {
    die ("Xeta var : ".mysqli_connect_errno());
}

?>