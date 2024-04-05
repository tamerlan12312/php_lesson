<?php
# numeric ayya - indexnen arraydir
# arrayin olub olmadigi onemli deyil index ilede tanimlana biler
   $number_arr = array(1,2,3,4,5) ;
 
   // burada ise index deyerini string sekilde yazacaq
   $number_arr[0] = "bir";
   $number_arr[1] = "iki";
   $number_arr[2] = "üç";
   $number_arr[3] = "dörd";
   // $number_arr[4] = "beş";
   $number_arr[5] = "altı"; #burada ise olmayan indexe elave etmek mumkundur


   $string_arr = array("Tamerlan","Farajullayev") ;

    echo "$number_arr[0] <br>"; # bu kimi cagirmaq olur numeric arrayi
    echo "$number_arr[1] <br>";
    echo "$number_arr[2] <br>";
    echo "$number_arr[3] <br>";
    echo "$number_arr[4] <br>";
    echo "$number_arr[5] <br>";
    # bunlar loop-lar ile olacaq
   echo "$string_arr[0] <br>" ;
   echo "$string_arr[1] <br>" ;


   $modeller = "BMW,TOYOTA,MERCEDES" ; 

   $modeller_2 = explode(",",$modeller) ; #string metodudur ","olanlardan ayirir ve array yaradir neticede
   echo var_dump($modeller_2) ; # explode ile geriye massiv qayidir

   echo "en sevdiyim maşın:$modeller_2[0] <br>" ;
   echo "en sevdiyim maşın:$modeller_2[1] <br>" ;
   echo "en sevdiyim maşın:$modeller_2[2] <br>" ;

?>