<?php

$arr = array();
$ff=null;

    for($i=0; $i<3; $i++){
       $arr2=rand(1,100);
       $arr[] = $arr2;
        $ff .= $arr2.'<br>';
        $arr []= rand(1,100);
    }

echo "<pre>";
print_r ($arr);
echo($ff);
echo array_product($arr);
echo "<pre>";

?>

