<?php
/*
 Data Tipleri :
 string         : metn tipinde olanlar
 int            : tam ededler
 double         : ondaliqli ededler
 boolean        : true/false deyerler 
 object         : obeykt
 array          : massivler
 null           : deyeri olmayan deyer  
*/

  $name = "Tamerlan" ; //string data type
  echo gettype($name) ;  // gettype() - ile data tipini mueyyen etmek olur - string
  echo "<br>" ;
  $price = 1000 ; // number/integer
  echo gettype($price) ;  // integer
  echo "<br>" ;
  $price = 14.99 ; // number/double
  echo gettype($price) ;  // double
  echo "<br>" ;
  $active = true ; // true/false
  echo gettype($active) ;  // true - 1  false - 0 seklinde olur
  echo "<br>";


  $price = (string)15 ; // (data type) 15 yazdiqda burada data tipini deyismek olur hazirda integer 15 string "15 seklindedir"
  echo gettype($price) ;  // string
  echo "<br>" ;
  $price = (int)15.5 ;  // burada double olan tipi integere cevirdikde sadece tam ededi goturur tam tersi olanda ise oldugu kimi olur
  echo gettype($price). " " . $price ;
  echo "<br>" ;
  $price = (int)"15a" ;  //stringi int cevirdi esas olan evvelinde string olmamasidir sonunda ola biler sadece int goturecek stringi yox
  echo gettype($price). " " . $price ;
  

 

?>