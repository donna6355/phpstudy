<?php
header('content-type:text/html;charset=utf-8;');

$src = '20200928.txt'; //원본 파일
$des = '20200928_copy.txt';//복사될 파일명

// 파일 복사
$result_1 = copy($src,$des);
if($result_1){
  printf('<h1>%s를 %s로 복사 성공 </h1>',$src,$des);
}else{
  printf('<h1>%s를 %s로 복사 실패 </h1>',$src,$des);
}

// 권한 변경
$result_2 = chmod($des,0777);
if($result_2){
  printf('<h1>%s 파일 퍼미션 변경 성공</h1>',$des);
}else{
  printf('<h1>%s 파일 퍼미션 변경 실패</h1>',$des);
}

// 파일 삭제
$del = '20200928_del.txt';
$result_3 = unlink($del);
if($result_3){
  printf('<h1>%s 삭제 성공</h1>',$del);
}else{
  printf('<h1>%s 삭제 실패</h1>',$del);
}

?>