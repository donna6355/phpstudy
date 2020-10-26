<?php
header('content-type:text/html;charset=utf-8;');
include_once('../php11/functions.php');
$title = 'UI/UX Engineering 콘텐츠 전문가 양성 과정 - 1';
$number = 1234567890;

$enc = urlencode($title);
$dec = urldecode($enc);

// 천단위 콤마가 적용된 문자열 리턴
$format_number = number_format($number);

print_h1($enc);
print_h1($dec);
print_h1($format_number);


?>