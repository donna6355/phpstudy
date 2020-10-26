<?php
header('content-type:text/html;charset=utf-8;');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    ul>li{outline:1px solid blue;list-style:none;}
    .page-header{border-bottom-color:red;}
    .text-center{margin:1.2em 0 0 0.5em}
  </style>
</head>
<body>
  <div class="container">
    <header class="page-header">
      <h1 class="jumbotron">Bootstrap 프레임웍의 기본구조</h1>
    </header>
    <section>
      <h2 class="text-center">.col-sm-4로 3분할</h2>
      <ul class="row text-center">
        <li class="col-sm-8 col-md-3 col-lg-2">첫번째 칸</li>
        <li class="col-sm-2 col-md-5 col-lg-4">두번째 칸</li>
        <li class="col-sm-2 col-md-4 col-lg-6">세번째 칸</li>
      </ul> 
    </section>
  </div>
</body>
</html>