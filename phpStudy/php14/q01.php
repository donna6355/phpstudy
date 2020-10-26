<?php
header('content-type:text/html;charset=utf-8;');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once('../inc/head.php')?>
</head>
<body>
  <div class="container">
    <header>
      <h1 class="jumbotron">Q1 당신의 직업은 무엇입니까?</h1>
    </header>
    <section>
      <ul class="list-group">
        <li class="list-group-item"><a href="q02.php?ans1=1">웹디자이너</a></li>
        <li class="list-group-item"><a href="q02.php?ans1=2">웹퍼블리셔</a></li>
        <li class="list-group-item"><a href="q02.php?ans1=3">웹기획자</a></li>
        <li class="list-group-item"><a href="q02.php?ans1=4">웹개발자</a></li>
      </ul>
    </section>
  </div>
</body>
</html>