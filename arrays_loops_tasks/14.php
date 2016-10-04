<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $e){
    if ($e == 2){
        echo "Есть!";
        break;
    }
    elseif ($e == 3){
        echo"Есть!";
        break;
    }
    elseif ($e == 4){
        echo"Есть!";
        break;
    }
    else{
        echo "Нет!";
        break;
    }
}
?>