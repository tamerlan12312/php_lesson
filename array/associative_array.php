<?php

#assosiativ array key ve value'dan teskil olunur keyi cagirdiqda value elde edirik

#key ve value olmasa idi bele elde ede bilerdik

$seria = ["10","90"] ;
$city = ["Baku","Absheron"] ;

echo "seria nomresi : {$seria[0]} city nomresi : {$city[0]} <br>" ;
echo "seria nomresi : {$seria[1]} city nomresi : {$city[1]} <br>" ;

# associative array

$seria_arr = array("10"=>"Baku","90"=>"Absheron") ; #10 key Baku ise valude 10u cagirdiqda Baku gelecekdir
$seria_arr[25] = "Tamerlan" ; # belede teyin etmek mumkundur 
echo $seria_arr[25]."<br>" ; # keyi cagirdiqda valuesini verecekdir (Tamerlan)
echo $seria_arr["10"]."<br>" ;

?>