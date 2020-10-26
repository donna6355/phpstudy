<?php
header('content-type:text/html;charset=utf-8;');

include('../php11/functions.php');

$value1 = '123.45678';
$value2 = 'abcdefghi';

// 문자열이 숫자 형식인지 검사
if(is_numeric($value1)){
// 문자열을 정수형태로 변환
$result = intval($value1);
print_h1(sum($result,300));
}else{
  $str = $value1.'은 숫자형식이 아닙니다';
  print_h1($str);
}

// 문자열이 숫자 형식인지 검사
if(is_numeric($value2)){
  $result = intval($value2);
  print_h1(sum($result,300));
}else{
  $str = $value2.'은 숫자형식이 아닙니다';
  print_h1($str);
}
?>