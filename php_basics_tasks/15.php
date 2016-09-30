<?php
$a = 6;
$b = 0;
$operator = '/';
if ($operator == '+') {
    $res = $a + $b;
}
elseif ($operator == '*') {
    $res = $a * $b;
}
elseif ($operator == '/' and $b==0) {
    echo "Ошибка!";
}
elseif ($operator == '/') {
    $res = $a / $b;
}
elseif ($operator == '%') {
    $res = $a % $b;
}
else {
    $res = $a - $b;
}
echo $res;
?>