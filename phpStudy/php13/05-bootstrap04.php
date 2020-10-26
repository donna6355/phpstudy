<?php
header('content-type:text/html;charset=utf-8;');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <title>Bootstrap Button</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <header class="page-header">
  <h1 class="jumbotron">컬럼리셋
  <small class = "btn btn-default text-uppercase center-block">column reset</small>
  </h1>
  </header>
  <section class="row">
    <div class="col-xs-6 col-sm-4">
      <h2>제목-1</h2>
      <p>내용-1</p>
      <a class="btn btn-primary" href="#">자세히 보기 &raquo;</a>
    </div>
    <div class="col-xs-6 col-sm-2">
      <h2>제목-2</h2>
      <p>내용-2</p>
      <a class="btn btn-success" href="#">자세히 보기 &raquo;</a>
    </div>
    <div class="col-xs-6 col-sm-3">
      <h2>제목-3</h2>
      <p>내용-3</p>
      <a class="btn btn-info" href="#">자세히 보기 &raquo;</a>
    </div>
    <div class="col-xs-6 col-sm-3">
      <h2>제목-4</h2>
      <p>내용-4</p>
      <a class="btn btn-warning" href="#">자세히 보기 &raquo;</a>
    </div>
  </section>
  <footer>
    <address class = "btn btn-danger" style="width:200px;margin-top:50px;">부트스트랩 RWD</address>
  </footer>
  </div>
</body>
</html>