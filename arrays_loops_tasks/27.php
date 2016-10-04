<?php
$rows=rand(1,10);
$cols=rand(1,20);
echo "<table border=1><tr>";
for ($i=1; $i<=$rows; $i++){
    echo"<tr>";
    for ($j=1; $j<=$cols; $j++){
        $colors = array('red'=>'red','yellow'=>'yellow','blue'=>'blue','gray'=>'gray','maroon'=>'maroon','brown'=>'brown','green'=>'green');
        $ddd= array_rand($colors);
        echo"<td style='background-color:$ddd'>$i $j</td>";
    }
    echo"</tr>";
}
echo "</table>";
?>
