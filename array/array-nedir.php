<?php
 
 $model1 = "BMW";
 $model2 = "TOYOTA";
 $model3 = "MERCEDES";

 $modeller = "BMW,TOYOTA,MERCEDES" ; 

 echo "en sevdiyim model ".$model1."<br>" ;
 echo "en sevdiyim model ".$model2."<br>" ;
 echo "en sevdiyim model ".$model3."<br>" ;

 $modeller_2 = array("BMW","TOYOTA","MERCEDES") ;
  echo "<br>" ;
 echo gettype($modeller_2)."<br>"; #massivdir
 echo $modeller_2[0]."<br>"; # bmw
 echo $modeller_2[1]."<br>"; #toyota
 echo $modeller_2[2]."<br>"; #mercedes  

  echo "<br>" ;
 echo "en sevdiyim model ".$modeller_2[0]."<br>" ;
 echo "en sevdiyim model ".$modeller_2[1]."<br>" ;
 echo "en sevdiyim model ".$modeller_2[2]."<br>" ;

?>