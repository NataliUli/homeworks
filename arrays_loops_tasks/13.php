
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица умножения</title>
</head>
<body>

<?php
echo "<table border=2><tr>";

for($i=1;$i<10; $i++) {
    echo "</tr><tr>";
    for ($j = 1; $j < 10; $j++) {
        $s = $i * $j;

        if ($s % 2) {
            echo "<td>$s</td>";
        }
        else {echo "<td><font color=#ff4500>$s</font></td>";
        }
    }
}
echo "</tr></tadle>";

?>

</body>
</html>


