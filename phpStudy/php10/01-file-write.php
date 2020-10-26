<?php
header('content-type:text/html;charset=utf-8;');
// date('Y-m-d H:i:s',time());
// echo(date('Ymd',time()));

//테스트를 위한 대상 파일명
// 20200928.txt 형식
$fname = date('Ymd',time()).".txt";

$data = '지금은 '. date('Y-m-d H:i:s',time()).'입니다.';
// echo($fname);

// fopen(파일명,모드);
// 파일 쓰기를 위한 파일핸들 얻기
$handle = fopen($fname,'a');

if($handle){
  printf("<h1>%s 파일 작성을 위한 핸들을 얻었습니다.</h1>",$fname);
  // 다른 접속자가 사용하지 못하도록 파일 잠금
  if(flock($handle,2)){
    fwrite($handle,$data);//내용작성
    flock($handle,3);//잠금해제
    printf('<h1>%s 파일이 작성되었습니다. </h1>',$fname);
  }else{
    printf("<h1>%s 파일 작성에 실패했습니다.</h1>",$fname);
  }
  fclose($handle);

}else{
  printf("<h1>%s 파일 작성에 실패했습니다.</h1>",$fname);
}

// 일반적으로 접속 로그 기록을 남길때 사용

// 파일인지 아닌지 검사
if(is_file($fname)){
  printf('<h1>%s(은)는 파일이 맞음</h1>',$fname);
}else{
  printf('<h1>%s(은)는 파일이 아님</h1>',$fname);
}

?>
