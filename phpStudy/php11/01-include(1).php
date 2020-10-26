<?php
header('content-type:text/html;charset=utf-8;');

echo('<h1>01-include(1).php 시작</h1>');
// include 함수는 포함시킬 파일의 내용을 호출위치에 복붙하는 것과 같은 원리로 동작함
include('./inc1.php');
echo('<h1>01-include(1).php 끝</h1>');
include('./inc1.php');
?>