<?php
function sayHello ($ad,$mesaj = "Salam"){ # default olaraq parametr teyin etmek olar
    return "{$mesaj} {$ad}" ; 
}

$netice = sayHello("Tamerlan"); # birinci yaxud 2ci parametr bos olarsa fatal error
# eger 2ci parametr teyin olarsa 2cisi daha ustundu neyin ki default parametr
# parametr gorderilende siralamasi eyni olmalidir  1ci 1cinin yerinde 2ci 2cinin yerinde
echo $netice ;


?>