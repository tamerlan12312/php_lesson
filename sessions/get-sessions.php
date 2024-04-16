<?php

session_start() ; # eger evvel yaradilibsa sessiondaki melumati  burda istifade etmek olur
 
 if (isset($_SESSION["username"])) {
     echo $_SESSION["username"];
 } else {
    echo "username yoxdur get scriptinde" ;
 }


echo "<br>" ;
echo $_SESSION["password"];

echo "<pre>";
print_r($_SESSION) ;

echo ini_get("session.gc_maxlifetime") ; #36000 s

?>