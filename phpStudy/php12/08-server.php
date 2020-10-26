<?php
header('content-type:text/html;charset=utf-8;');
include_once('../php11/functions.php');

// 현재 사이트가 위치한 서버상의 절대경로 위치
print_h1($_SERVER['DOCUMENT_ROOT']);

// 현재 사이트 접속자의 환경
print_h1($_SERVER['HTTP_USER_AGENT']);

// 접속자의 IP 주소
print_h1($_SERVER['REMOTE_ADDR']);

// 사이트의 도메인
print_h1($_SERVER['SERVER_NAME']);

// 사이트의 포트번호 
print_h1($_SERVER['SERVER_PORT']);

// 현재 페이지의 주소(도메인 제외)
print_h1($_SERVER['REQUEST_URI']);

// 현재 페이지의 주소에서 도메인과 넘겨지는 값 제외
print_h1($_SERVER['PHP_SELF']);
?>