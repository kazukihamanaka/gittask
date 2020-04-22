<?php
function double($number){
  $result = $number *2;
  return $result;
}
echo double(10);

function f($a, $b){
  $result = $a + $b;
  return $result;
}
echo f(10,20);

function　multiply($arr){
  $result = 1;
  foreach($arr as $a){
  $result *= $a;
}
  rerurn $result;
}
$a = array(1,3,5,7,9);
echo multiply(arry);

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max<$array[$i]){
    $max=$array[$i];
 }
}
return $max_number;
}

?>
