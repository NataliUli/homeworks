<?php
$months = array("January", 'February', 'March','April','May',
    'June','July','August','September','October','November','December');
$month =9;
foreach ($months as $k=>$v){
    if($k==$month -1){
  echo "<b>$v<br></b>";}
  else{
      echo "$v<br>";
  }
}
?>