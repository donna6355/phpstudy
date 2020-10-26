<?php
header('content-type:text/html;charset=utf-8;');
// 화면에 아무것도 출력되지 않고 바로 이동
// 현재 페이지를 history에 남기지 않음
// 단점 : 페이지 이동 전 브라우저를 통해 다른 작업을 수행할 수 없다. 
header('Location:http://naver.com');
exit();

// 대부분의 백엔드 프로그램언어는 자체적으로 redirect 기능을 지원한다. 그런데 php는 없다. 
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="refresh" content="0; url=http://naver.com">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redirect</title>
  <script>alert('redirect')</script>
</head>
<body>
  <h1>php 프로그래밍</h1>
</body>
</html>