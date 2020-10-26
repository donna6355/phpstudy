<?php
header('content-type:text/html;charset=utf-8;');

/*
PHP의 변수타입
integer(정수),double(실수)
string, boolean, null
array, object
*/

//$변수명 = 값;
//const $상수명 = 값;

$msg = "이제 곧 끝날 시간입니다.";//string
$blank = "";//empty string
$age = 20;//integer
$point = 820.5; //double
$is_ok = true; //boolean

const NATION = '한국';
define (CITY,'서울'); 
// NATION = 'Korea';
// define은 구버전 상수 선언으로 권장하지 않음

echo('<h1>msg='.$msg.'</h1>');
echo('<h1>내 나이는 '.$age.'세 입니다.</h1>');
$is_ok = false;
echo('<h1>is_ok = '.$is_ok.'</h1>');
echo('우리나라는'.NATION.'입니다.');
echo('여기는 '.CITY.'입니다.');
/*
(.)은 문자열과 변수를 하나의 문장으로 연결해주는 연결연산자

ture : 존재한다. 혹은 숫자 1
echo()로 출력할 경우 1로 출력된

false: 존재하지 않는다.
존재하지 않는 값이므로 echo()로 출력할 경우 아무것도 표시되지 않는다. 
*/


?>


<script>
  console.log(false);
</script>