<?php
header('content-type:text/html;charset=utf-8;');

$sum_odd = 0;
$sum_even = 0;

for($i=0;$i<=100;$i++){
if($i%2 ===0){
  $sum_even+=$i;
}else{
  $sum_odd+=$i;
}

  // $i%2 === 0 ?  $sum_even+=$i:$sum_odd+=$i;
};
echo("<h1>".$sum_odd."</h1>");
echo("<h1>".$sum_even."</h1>");

// printf('짝수의 합은 %d, 홀수의 합은 %d',$sum_even,$sum_odd);

?>