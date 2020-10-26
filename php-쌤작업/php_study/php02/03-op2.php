<?
  header('content-type:text/html;charset=utf-8;');

  $num = 100;

  //단항연산자

  $num = $num+5;
  $num += 5;//약식표현
  echo('<h1>'.$num.'</h1>');//110
  
  $num -= 3;
  echo('<h1>'.$num.'</h1>');//107
  
  $num *= 10;
  echo('<h1>'.$num.'</h1>');//1070
  
  $num /= 5;
  echo('<h1>'.$num.'</h1>');//214
  
  $num %= 2;
  echo('<h1>'.$num.'</h1>');//0
?>