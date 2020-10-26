<?php
header('content-type:text/html;charset=utf-8;');

$url = " http://www.naver.com/index.php  ";
echo('<p>현재 url의 길이는 '.strlen($url).'</p>');

$url = trim($url);
echo('<p>trim() 이후 현재 url의 길이는 '.strlen($url).'</p>');
// $url = "http://www.abc.net/index.php";
// $url = "http://www.mylover.cc/index.php";

//원하는 글자수만큼 추출하기 (도메인 얻기)
//substr(원본문자열, 시작인덱스,글자수)
$pos1 = strpos($url,'/',7);
echo($pos1);
$domain = substr($url,7,$pos1-7);
echo($domain.'<br />');

//원하는 글자수만큼 추출하기 (파일명 얻기)
$url = "http://www.mylover.cc/hello.php";
$pos2 = strrpos ($url,'/');
$pos3 = strrpos ($url,'.');
$filename = substr($url,$pos2+1,$pos3-$pos2-1);
echo($filename);

$boy = "i am a boy!";
$boy1 = substr($boy,7,3);
echo('<h1>'.$boy1.'</h1>');

//원하는 글자수만큼 추출하기 (확장자 얻기)
$ext = substr($url,$pos3+1);
echo('<p>ext name ='.$ext.' </p>');


?>
<script>
let url = " http://www.naver.com/index.php";
console.log('url 길이 = ',url.length)
url = url.trim();
console.log('trim 이후 url 길이 = ',url.length)
// url = "http://www.abc.net/index.php";
// url = "http://www.mylover.cc/index.php";

//원하는 글자수만큼 추출하기 (도메인 얻기)
//substr(원본문자열, 끝인덱스)
let pos1 = url.indexOf('/',7)
console.log(pos1);
let domain = url.substring(7,pos1);
console.log(domain);

//원하는 글자수만큼 추출하기 (파일명 얻기)
url = "http://www.mylover.cc/starystarynight.php";
let pos2 = url.lastIndexOf('/');
let pos3 = url.lastIndexOf('.');
console.log(pos2,pos3)
let filename = url.slice(pos2+1,pos3);
console.log(filename);

let ext = url.slice(pos3+1);
console.log(ext);
</script>