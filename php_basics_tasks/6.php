<?php
$age = 25;
if ($age >18 and $age<=59) {
    $phrase = "Вам еще работать и работать";
}
elseif ($age>59) {
    $$phrase = "Вам пора на пенсию";
}
   echo $phrase;
?>