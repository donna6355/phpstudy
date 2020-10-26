<?PHP
header('content-type:text/html;charset=utf-8;');

//str_replace(A,B,$c) 함수는 치화 결과를 리턴한다.
//A를 B로 $C에서 
$msg = "안녕하세요, PHP 너무 재밌죠?";
echo('<h1>'.$msg.'</h1>');

$msg1 = str_replace('안녕하세요','이럇사이마세',$msg);
echo('<h1>'.$msg1.'</h1>');

$msg2 = str_replace('이럇사이마세','웹서버프로그래밍 언어',$msg);
echo('<h1>'.$msg2.'</h1>');
?>