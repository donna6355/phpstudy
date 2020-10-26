<?
  header('content-type:text/html;charset=utf-8;');

  $url = "http://WWW.NAVER.COM/index.php";
  $msg = "PHP Hello~! PHP";

  //문자열의 길이
  //만약 못찾으면 false 리턴
  $url_len = strlen($url);
  $msg_len = strlen($msg);
  echo("<p>url 문자열의 길이 : ".$url_len."</p>");
  echo("<p>msg 문자열의 길이 : ".$msg_len."</p>");
  
  //특정 글자가 처음으로 나타난 위치
  $pos_first =strpos($url,"NAVER");
  echo("<p>NAVER가 처음으로 나타난 위치 : ".$pos_first."</p>");
  
  //특정 글자가 마지막으로 나타난 위치
  $pos_last = strrpos($msg,'PHP');
  echo("<p>PHP가 마지막으로 나타난 위치 : ".$pos_last."</p>");
  
  //대문자로 변환
  $upper = strtoupper($url);
  echo("<p>모든 글자를 대문자로 변환 : ".$upper."</p>");
  
  //소문자로 변환
  $lower = strtolower($msg);
  echo("<p>모든 글자를 소문자로 변환 : ".$lower."</p>");
?>

<script>
const url = "http://WWW.NAVER.COM/index.php";
const msg = "PHP Hello~! PHP";

let url_len = url.length;
let msg_len = msg.length;

console.log("url 문자열의 길이는 %d", url_len);
console.log("msg 문자열의 길이는 %d", msg_len);


//특정 글자가 처음으로 나타난 위치
//만약 못찾으면 -1 리턴
let pos_first = url.indexOf('NAVER');
console.log('NAVER문자가 처음으로 나타난 위치 : $d', pos_first);

//특정 글자가 마지막으로 나타난 위치
//만약 못찾으면 -1 리턴
let pos_last = msg.lastIndexOf('PHP');
console.log('PHP문자가 마지막으로 나타난 위치 : %d', pos_last);

//대문자로 변환
let upper = url.toUpperCase();
console.log('대문자로 변환 : %s', upper);

//소문자로 변환
let lower = url.toLowerCase();
console.log('소문자로 변환 : %s', lower);
</script>