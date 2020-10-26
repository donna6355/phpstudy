<?php
header('content-type:text/html;charset=utf-8;');
$fname = './20200928.txt';
//파일이 존재한 경우에 읽는다.
if(file_exists($fname)){
$handle = fopen($fname,'r');
if($handle){
  // 파일 내용 읽기
  $read = fread($handle,filesize($fname));
  fclose($handle);
  echo(nl2br($read));

}else{
  printf('<h1>%s 파일 읽기에 실패했습니다.</h1>',$fname);
}
}else{
  printf('<h1>%s 파일이 존재하지 않습니다.</h1>',$fname);
}
?>