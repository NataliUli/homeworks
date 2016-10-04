<b>Работа с foreach</b><br>
<?php
$arr = array(26, 17, 136, 12, 79, 15);

$result = 0;
foreach ($arr as $d)
{
    $result = $result + $d**2;
}
echo $result;
?>
