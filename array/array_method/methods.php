<?php

/*

1.array_change_key_case($arr,CASE_UPPER)
2.array_chunk($arr2,2)
3.array_column($arr3, 'last_name','id')
4.array_combine($arr1,$arr2)


*/
 
 $arr1 = array("Tamerlan"=>25,"Tamer"=>24,"Education" => "WCU") ; # assosiativ array
 $arr2 = array("Tamerlan","Farajullayev","Tamer") ; # numeric array
 $arr3 = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );


# print_r(array_change_key_case($arr,CASE_UPPER)) ; # key boyuk/kicik

# print_r (array_chunk($arr2,2)) ; # boyuk arrayi kicik arraylere bolur

  
 # print_r(array_column($arr3, 'last_name','id')); # massivdeki key yazib valuerini getirir

 # print_r (array_combine($arr1,$arr2)) #netice assosiativ array ve keyleri eyni sayda olmalidir

?>