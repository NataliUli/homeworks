
<?php
$arr = array();
for ($i=0; $i<=50; $i++) {
    $arr[] = rand(0, 50);
}

echo "<pre>";
print_r($arr);
echo "<pre>";

$min = min($arr);
$max = max($arr);
 
foreach($arr as $k=>$v){
  if($v == $min){
    $arr[$k] = $max;
  }
  elseif($v == $max){
    $arr[$k] = $min;
  }
}
echo "<pre>";
print_r($arr);
echo "<pre>";
?>