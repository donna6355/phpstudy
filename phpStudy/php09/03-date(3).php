<?php
header('content-type:text/html;charset=utf-8;');

//기념일 계산하기
$firstTime = mktime(0,0,0,3,1,1919);
$nowTime = time();//오늘

$passedTime = $nowTime - $firstTime;//두 날짜 사이의 차이값(초단위)

//$passedTime을 며칠로 변환
$duration = $passedTime/60/60/24;
printf('<h1>%s일</h1>',round($duration));

//기념일 예측 함수
function calcDate ($days){
  $toFirst = mktime(0,0,0,3,1,1919);
  $future = $toFirst + $days * (60*60*24);//timestamp
  
  $someday = date('Y년 m월 d일', $future);
  printf('<h1>%d일 후는 %s</h1>',$days,$someday);
  
}
calcDate(37075);


?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>기념일 계산하기</title>
</head>
<body>
  <div id="wrap">
  <hr />
  <h1>우리 만난지 <span class="term">?</span>일</h1>
  <ol>
    <li>100일 <span class="day100">?</span></li>
    <li>200일 <span class="day200">?</span></li>
    <li>300일 <span class="day300">?</span></li>
    <li>365일 <span class="day365">?</span></li>
  </ol>
  </div>
</body>
  <script>
  const inputDay = prompt('기념일을 입력해 주세요','1919-03-01');
  
  const now = new Date();
  const firstDay = new Date(inputDay);

  const toNow = now.getTime();//밀리초
  const toFirst = firstDay.getTime();
  const passedTime = (toNow - toFirst );
  const passedDay = Math.round(passedTime/(24*60*60*1000))

  document.querySelector('.term').textContent = passedDay;

 const calcDate = function(days){
   const future = toFirst + days * (60*60*24*1000);
   const someday = new Date (future);
   const year = someday.getFullYear();//년도 추출
   const month = someday.getMonth() +1;//월 추출
   const date = someday.getDate();//일자 추출

   document.querySelector('.day'+days).textContent = year+'년'+month+'월'+date+'일'
 }

 
 calcDate(100);

  </script>
</html>