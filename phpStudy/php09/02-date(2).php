<?php
header('content-type:text/html;charset=utf-8;');

//현재 시점의 timestamp값
$now = time();

//날짜 구하기
$day = date('Y-m-d',$now);
printf('<h1>%s</h1>',$day);

//30일 후의 날짜 구하기
$after30day = date('Y-m-d',$now+(30*24*60*60));
printf('<h1>%s</h1>',$after30day);

//1년 전의 날짜 구하기
$before1yr = date('Y-m-d',$now-(365*24*60*60));
printf('<h1>%s</h1>',$before1yr);
?>