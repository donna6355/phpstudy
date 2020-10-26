<?php
header('content-type:text/html;charset=utf-8;');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
<?php include_once('../inc/head.php')?>
</head>
<body>
  <div class="container">
    <header class="page-header">
      <h1 class="jumbotron">
        헬로 부트스트랩
        <small class="btn btn-primary">http://getbootstrap.com</small>
      </h1>
    </header>
    <section>
      <h2 class="text-center">
      부트스트랩 버튼
      </h2>
      <a href="#" class="btn btn-default btn-xs">Link-1</a>
      <a href="#" class="btn btn-success btn-sm">Link-2</a>
      <a href="#" class="btn btn-info btn-md">Link-3</a>
      <a href="#" class="btn btn-warning btn-lg">Link-4</a>
      <a href="#" class="btn btn-danger">Link-5</a>
      <a href="#" class="btn btn-link">Link-6</a>
      <a href="#" class="btn btn-primary">Link-7</a>
    </section>
  </div>
</body>
</html>