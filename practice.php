
<?php
function double($number){
    $doubledNumber = $number*2;
    return $doubledNumber;
}


function f($a,$b){
    return $a + $b;
}

$arr = array(1,3,5,7,9);


function multiply($arr){
 $result = 1;
 foreach($arr as $a){
    $result *= $a;
 }
 return $result;
}
echo multiply($arr);


?>










