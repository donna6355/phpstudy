<?php
header('content-type:text/html;charset=utf-8;');

// 테스트를 위한 대상 디렉토리(폴더) 이름
// E:\Donna\php\phpStudy\php10
// $dir = getcwd();
// echo($dir);
$dir = getcwd().'/'.date('Ymd',time());

// 존재 여부 검사
if(file_exists($dir)){
// 존재하면
printf('<h1>%s 디렉토리(폴더)가 이미 존재합니다. </h1>',$dir);

 // 폴더 삭제
 $remove_ok = rmdir($dir);
 if($remove_ok){
  printf('<h1>%s 폴더 삭제 성공</h1>',$dir);
}else{
  printf('<h1>%s 폴더 삭제 실패</h1>',$dir);
 }

}else{
  // 존재하지 않으면
  printf('<h1>%s 디렉토리(폴더)가 아직 존재하지 않습니다. </h1>',$dir);

  // 폴더 생성
  $make_ok = mkdir($dir);
  if($make_ok){
    printf('<h1>%s 폴더 생성 성공</h1>',$dir);
  }else{
    printf('<h1>%s 폴더 생성 실패</h1>',$dir);
  }

}

// 디렉토리(폴더)인지 아닌지 검사
if(is_dir($dir)){
  printf('<h1>%s(은)는 폴더가 맞음</h1>',$dir);
  
}else{
  printf('<h1>%s(은)는 폴더가 아님</h1>',$dir);
}

?>