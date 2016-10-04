<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $r){
    if($r%3){
        echo"$r, ";
    }
    else{
        echo"$r<br>";
    }
}
?>