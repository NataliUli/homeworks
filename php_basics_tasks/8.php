<?php
$age = -1;
if ($age >18 and $age<=59) {
    $phrase = "Вам еще работать и работать";
}
elseif ($age>59) {
    $phrase = "Вам пора на пенсию";
}
elseif ($age>0 and $age<=17) {
    $phrase =  "Вам еще рано работать";
}
else {
    $phrase = "Неизвестный возраст";
}
  echo $phrase;
?>