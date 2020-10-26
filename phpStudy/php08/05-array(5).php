<?php
header('content-type:text/html;charset=utf-8;');

//문자열을 배열로 변환하는 함수
//explode(구분자,문자열);
$str = 'PHP, ASP, JSP, C#, nodejs';

//,(comma)를 구분자로 하여 배열로 변환
$newStr = explode(',',$str);

for($i=0;$i<count($newStr);$i++){
  printf('<h1>%s</h1>',$newStr[$i]);
};


//배열을 문자열로 변환하는 함수
//implode(구분자,배열명);
$miarray = array('홍길동','둘리','머털이');
$strNames = implode(',',$miarray);
printf('<h2>%s</h2>',$strNames);

?>