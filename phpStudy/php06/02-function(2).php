<?
header('content-type:text/html;charset=utf-8;');

//하나의 parameter를 가진 function
function onePara ($num){
$sum = ++$num;
echo('<h1>'.$sum.'</h1>');
};
onePara(2);
onePara(5);
onePara(10);

//두개의 parameter를 가진 twoPara()함수
function twoPara($x,$y){
  $sum = $x + $y;
  echo('<h1>'.$sum.'</h1>');
};
twoPara(2,1);
twoPara(3,5);
twoPara(10,20);

?>