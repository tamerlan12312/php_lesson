<?php
  # iç-içə arraylərə çatmaq
  $telebeA = array("Tamerlan Farajullayev",array(50,60,70));
  $telebeB = array("Tamerlan Farajullayev 2",array(80,60,90));

  echo $telebeA[0]."<br>" ; // Tamerlan Farajullayev
//   echo $telebeA[1] ; // (50,60,70)
echo $telebeA[1][0]."<br>" ;  //50 
echo $telebeA[1][1]."<br>" ;  //60
echo $telebeA[1][2]."<br>" ;  //70
  echo "<br>";
  echo "<br>";
$bal = ($telebeA[1][0] + $telebeA[1][1] + $telebeA[1][2]) / 3 ;

echo " Telebe $telebeA[0]-in ümumi balı budur-".$bal ;


$telebeC = array(
       "100" => array(
        "ad"=>"Tamerlan",
        "soyad"=>"Farajullayev",
        "fizika"=>array(80,90,100),
        "kimya"=>array(60,70,80),

       ),
       "101" => array(
        "ad"=>"Tamerlan 1",
        "soyad"=>"Farajullayev 1",
        "fizika"=>array(80,90,100),
        "kimya"=>array(60,70,80),

       ),
       "102" => array(
        "ad"=>"Tamerlan 2",
        "soyad"=>"Farajullayev 2",
        "fizika"=>array(80,90,100),
        "kimya"=>array(60,70,80),

       ),
) ;

echo "<br>";
echo "<br>";
echo $telebeC["100"]["ad"]."<br>"; # key elde ederek value cata bilirik burada Tamerlan adi gelecekdir
echo $telebeC["100"]["soyad"]."<br>"; # Farajullayev
echo $telebeC["100"]["kimya"][1]; # 70
?>