<?php
header('content-type:text/html;charset=utf-8;');

  // strpos(), strrpos()로 문자열의 위치를 찾지 못한 경우를 어떻게 알 수 있는가?

  $title = "부릉부릉안쌤과 함께하는 PHP";

  $pos1 = strpos($title, '부릉부릉');//0
  $pos2 = strpos($title, 'Javascript');//false

  //PHP는 0과 FALSE를 동일하게 처리하기 때문에 만약 리턴값이 숫자0인 경우와 FALSE가 서로 다른 의미인 경우, "==" 동등연산자로 비교하면 원치않는 결과를 얻을 수 있다.

  //if 조건식에서 "===" 일치연산자를 사용하면 데이터 타입까지 동일해야 참으로 인식함을 이용해서 0과 false를 구별할 수 있다.

  if($pos1 === false){
    echo("<h1>문자열을 찾지 못했습니다.</h1>");
  }

  if($pos2 === 0){
    echo("<h1>찾는 문자열의 위치가 0번째 입니다.</h1>");
  }




$url = 'http://WWW.NAVER.COM/index.php';
$msg = 'PHP hello. PHP';

//문자열의 길이
// $url_len = mb_strlen($url);
// $msg_len = mb_strlen($msg);
$url_len = strlen($url);
$msg_len = strlen($msg);
echo('<p>URL 문자열의 길이 : '.$url_len.'</p>');
echo('<p>MSG 문자열의 길이 : '.$msg_len.'</p>');

//특정글자가 처음으로 나타나는 위치
//만약 못 찾으면 false를 return
$pos_first = strpos($url,'NAVER');
echo('<p>NAVER가 처음으로 나타나는 위치 : '.$pos_first.'</p>');

//특정글자가 마지막으로 나타나는 위치
$pos_last = strrpos($msg,'PHP');
echo('<p>PHP가 처음으로 나타나는 위치 : '.$pos_last.'</p>');

//대문자로 변환
$upper = strtoupper($url);
echo('<p> 모든 글자를 대문자로 변환 : '.$upper.'</p>');

//소문자로 변환
$lower = strtolower($msg);
echo('<p> 모든 글자를 소문자로 변환 : '.$lower.'</p>');

?>

<script>
  const url = 'http://WWW.NAVER.COM/index.php';
  const msg = 'PHP hello. PHP';
  
  let url_len = url.length;
  let msg_len = msg.length;
  console.log('<p> JVS URL 문자열의 길이 :'+url_len+'</p>');
  console.log('<p> JVS MSG 문자열의 길이 :'+msg_len+'</p>');

  //특정글자가 처음으로 나타나는 위치
  //만약 못 찾으면 -1을 return
let pos_first = url.indexOf('NAVER');
console.log('NAVER가 처음으로 나타나는 위치 : %d',pos_first);

//특정글자가 마지막으로 나타나는 위치
let pos_last = msg.lastIndexOf('PHP');
console.log('PHP가 마지막으로 나타나는 위치 : %d ',pos_last);

//대문자로 변환
let upper = url.toUpperCase();
console.log('모든 글자를 대문자로 변환 : %s',upper);

//소문자로 변화
let lower = msg.toLowerCase();
console.log('모든 글자를 소문자로 변환 : %s',lower);


</script>