<?php
  header('content-type:text/html;charset=utf-8;');

  //사칙연산
  $num1 = 5 + 2;
  $num2 = 5 - 2;
  $num3 = 5*2;
  $num4 = 5/2;//결과값이 자바스크립트와 같음
  $num5 = 5%2;

  //결과출력
  echo('$num1 = '.$num1);
  echo('$num2 = '.$num2);
  echo('$num3 = '.$num3);
  echo('$num4 = '.$num4);
  echo('$num5 = '.$num5);

  //연산자 우선순위
  $num6 = 5+2 *(3-1);
  echo('$num6 ='.$num6);

?>

