<?php
header('content-type:text/html;charset=utf-8;');

$grade = 'B';

switch($grade){
  case "A" : 
    echo('90~100점 사이입니다.');
  break;
  case "B" :
     echo('80~90점 사이입니다.');
  break;
  case "C" : 
    echo('70~80점 사이입니다.');
  break;
  default :
    echo('80점 이하 입니다.');
}
?>
