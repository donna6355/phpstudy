<?php
header('content-type:text/html;charset=utf-8;');

$myage = 19;

if($myage === 19){
  echo('<h1>'.$myage.'살 입니다.</h1>');
}
if($myage != '20'){
  echo('<h1>20살이 아닙니다.</h1>');
  
}
?>