
<?php
$f = '';
for ($v = 1; $v <= 9; $v++)
{
    for($s=0; $s<$v; $s++){
       $f=$f.$v;
    }
    echo $f.'<br>';
    $f = '';
}
?>


