<?php
header('content-type:text/html;charset=utf-8;');

/*
redirect($url,$msg) 함수 제작
특정 메세지를 표시한후, 지정된 페이지로 강제 이동시킨다.
$url : 이동할 페이지 경로, false로 지정한 경우 이전 페이지로 이동

$msg : 화면에 표시할 메세지, false일 경우 아무것도 표시 안함
*/ 

function redirect ($url,$msg){

$html = '<!DOCTYPE html>';
$html .= '<html lang="ko">';
$html .='<head>';
$html .='<meta charset="UTF-8">';


// 메세지가 전달된 경우
if($msg !== false){
  $html .='<script>alert("'.$msg.'");</script>';
}

//이동할 url이 전달된 경우
if($url !== false){
  $html .='<meta http-equiv="refresh" content="0; url='.$url.'">';
}else{
  $html .='<script>history.back()</script>';
}

$html .='</head>';
$html .='<body><h1>php 프로그래밍</h1></body>';
$html .='</html>';


echo($html);
exit();
}
// 페이지 이동(메시지 있음)
// redirect('http://daum.net','다음으로 이동합니다.');

// 페이지 이동 (메시지 없음)
// redirect('http://naver.com',false);

// 뒤로가기(메시지 없음)
// redirect(false,false);

// 뒤로가기(메시지 있음)
redirect(false,'실명인증 필요');
?>
