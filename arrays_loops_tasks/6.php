<b>Работа с ключами</b><br>
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $k=>$v)
{
    $en[] = $k;
    $ru[] = $v;
}
print_r($en);
print_r($ru);
?>
