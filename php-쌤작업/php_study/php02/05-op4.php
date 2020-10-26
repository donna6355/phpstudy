<?
  header('content-type:text/html;charset=utf-8;');

  $a = 123;
  $b = 456;

  //핵심 - 비교연산의 결과는 boolean값 이다.
  $result1 = $a == $b;//false -> 출력내용 없음
  $result2 = $a === $b;//false
  $result3 = $a > $b;//false
  $result4 = $a <= $b;//true -> 1 출력

  echo('<h1>$result1='.$result1.'</h1>');
  echo('<h1>$result2='.$result2.'</h1>');
  echo('<h1>$result3='.$result3.'</h1>');
  echo('<h1>$result4='.$result4.'</h1>');
?>