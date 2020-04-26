<?php
function double($number) {
  $result = $number *2;
  return $result;
}
echo double(10);

function f($a, $b) {
  $result = $a + $b;
  return $result;
}
echo f(10,20);

function multiply($arr) {
  $result = $arr[0];
  for($i =1; $i < count($arr); $i++) {
  $result *= $arr[$i];
 }
  return $result;
}
echo multiply(array(1,3,5,7,9));

function max_array($arr) {
  $max_number = $arr[0];
  foreach($arr as $a) {
  if($max_number < $a) {
     $max_number = $a;
  }
}
 return $max_number;
}
 echo max_array(array(2,10,6,22));
?>
