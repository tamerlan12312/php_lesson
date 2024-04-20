<?php
# eger string sekilde json datadir - decode
# arraye cevirmek isteyiriksek : yerine => olsa assosiativ arraydir
# eksi olduqda ise arrayi json stringine cevirmek ucun  -   encode ist olunur

$jsonString = '{
    "firstName" : "Tamerlan",
    "lastName" : "Farajullayev",
    "hobbies" : [
        "sport","music"
    ] ,
    "age" : 25 ,
    "children" : [
        {
            "firstName":"Tamer",
            "age":4
        }
    ]

}' ;


# de serialize
// echo gettype($jsonString );
// $json_arr = json_decode($jsonString,true) ; # true olanda assosiativ massive cevirir true olmasa obyekte cevirir OPP
// echo "<pre>";
// print_r( $json_arr) ;
// echo $json_arr["children"][0]["age"] ;
// echo "</pre>";

$myfile = fopen("person.json","r") ;
$size = filesize("person.json") ;
 
$jsonData = json_decode(fread($myfile,$size),true) ;

fclose($myfile) ;

echo $jsonData["children"][0]["firstName"] ;

?>