<?php
# parametri qeyd etmeden ama parametr gonderildikde nece elde etmek olar

function intro () { # parametr qeyd olunmadan
        $parametr = func_num_args(); # yazilan parametr sayisini getirir
        if ($parametr === 0) {
            echo "parametr gonderilmeyib" ; 
        } else {         
            # echo func_get_arg(0) ; # sadece birini gedir
             $data = func_get_args() ; # args olduqda ise hamisini getirir donguye salaraq 
             foreach ($data as $d){
                echo $d."<br>" ;
             } 
        }
}

intro("Tamerlan","Farajullayev",25) ;

?>