<?php
$days = array('Monday',"Tuesday", 'Wednesday', 'Thursday','Friday','Saturday', "Sunday");
$sat =6;
$sun =7;
foreach ($days as $k=>$v){
    if($k==$sat -1){
        echo "<b>$v<br></b>";
    }
    elseif($k==$sun -1){
        echo "<b>$v<br></b>";
    }
    else{
        echo "$v<br>";
    }
}
?>