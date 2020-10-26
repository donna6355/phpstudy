<?php
header('content-type:text/html;charset=utf-8;');

$sum = 0;

while($i <= 100){
  $sum += $i;
  $i++;
};

//%s:문자열, $d:정수, $f:실수
printf('1부터 100까지의 합은 %d',$sum);
?>

<script>
  const myname = 'Tigger';
  const age = 19;
  console.log('저는 %s이고 나이는 %d세 임다.', myname,age);
</script>