<?php
$name = "hamanaka";
if ($name == "hamanaka" ){
  echo "私はあなたの名前です";
} else {
  echo "私はあなたの名前ではありません";
}

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
   $total += $i;
}
echo $total;

$fruits = array("apple", "grape", "peach", "lemon", "orange");
foreach($fruits as $fruit){
 echo "要素は" . $fruit;
 echo "\n";
}

$start = 5;
$end = 100;

for($i = $start; $i <= $end; $i++){
if($i % 5 == 0){
 echo $i;
 }
}
?>
