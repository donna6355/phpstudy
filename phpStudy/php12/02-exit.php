<?php
header('content-type:text/html;charset=utf-8;');
include('../php11/functions.php');

$num = 100;
if($num>300){
  print_h1('프로그램을 종료합니다.');
  exit();
}else if($num <200){
  die('<h1>die 함수로 프로그램 종료</h1>');
}
print_h1($num);
?>