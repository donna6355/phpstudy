<?php
header('content-type:text/html;charset=utf-8;');

/*
연관배열- key=>value의 쌍으로 표기
*/

$myarray=array(
  'title'=>'PHP 연습하기',
  'content'=>'배열과 배열관련 함수'
);

// foreach(배열명 as $key => $value){}
foreach($myarray as $key => $value){
  printf('<h1>* %s</h1>',$myarray[$key]);
  printf('<h1>* %s</h1>',$value);
}

// printf('<h1>%s</h1>',$myarray['title']);
// printf('<h1>%s</h1>',$myarray['content']);


//2차원 연관 배열

$miarray = array(
  array('name'=>'홍길동','grade'=>'1학년'),
  array('name'=>'둘리','grade'=>'2학년'),
  array('name'=>'머털이','grade'=>'3학년')
);

for($i = 0;$i<count($miarray);$i++){
  foreach($miarray[$i] as $key =>$value){
    printf('<h2>%s = %s</h2>',$key,$value);
  }
  echo('=============');
}

// printf('<h1>%s</h1>',$miarray[1]['name']);
?>