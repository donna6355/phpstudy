<?
  header('content-type:text/html;charset=utf-8;');

  //하나의 파라미터를 가진 함수
  function oneParam($num){
    $sum = $num+1;
    echo('<h1>'.$sum.'</h1>');
  }

  oneParam(2);
  oneParam(5);
  oneParam(10);


  //두개의 파라미터를 가진 twoParm() 함수 
  function twoParm($x,$y){
    $sum = $x + $y;
    echo("<h1>".$sum."</h1>");
  }

  twoParm(2,1);
  twoParm(3,5);
  twoParm(10,20);

?>