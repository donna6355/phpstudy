<?php
header('content-type:text/html;charset=utf-8;');

//시간을 조회하는 함수 time()
//timestamp => 1970-01-01 자정부터 지금까지 지나온 시간을 초 단위로 변환한 값

$new_time = time();
printf('<h1>%s</h1>',$new_time);

//date(Y-m-d H:i:s,timestamp) : 주어진 포맷(형식)에 맞춰 날짜 형식의 문자열로 변환

$today = date('Y-m-d H:i:s',$new_time);
$today = date('Y/m/d H:i:s',$new_time);
printf('<h1>%s</h1>',$today);

//내가 원하는 특정 시간에 대한 timestamp 열기
//mktime(시,분,초,월,일,년)
$my_time = mktime(13,55,32,8,25,2019);
printf('<h1>%s</h1>',$my_time);

$someday = date('Y-m-d H:i:s',$my_time);
printf('<h1>%s</h1>',$someday);

//요일값을 의미하는 배열
$days = array('일','월','화','수','목','금','토');
echo(date('w',time()));//0~6

//요일 출력하기
$dayIdx = date('w',time());
printf('<h1>%s</h1>',$days[$dayIdx]);

$someIdx = date('w',$my_time);
printf('<h1>%s</h1>',$days[$someIdx]);
?>