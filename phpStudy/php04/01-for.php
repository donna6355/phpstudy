<?php
header('content-type:text/html;charset=utf-8;');

$sum = 0;

// i값이 1~100까지 증가하는 동안 i값을 $sum에 누적

for($i=0;$i<=100;$i++){
  $sum += $i;
};
echo($sum);



?>