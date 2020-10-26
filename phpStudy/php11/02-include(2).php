<?php
header('content-type:text/html;charset=utf-8;');

echo("<h1>02-include(2).php 시작</h1>");

include_once('./inc1.php');

echo("<h1>02-include(2).php 끝</h1>");
include_once('./inc1.php');
?>