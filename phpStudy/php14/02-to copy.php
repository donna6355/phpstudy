<?php
header('content-type:text/html;charset=utf-8;');
$ans = intval($_GET['ans']);
$result = '';

if($ans === 300){
  $result = '정답입니다.';
}else{
  $result = '땡! 다시 도전해 보세요.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once('../inc/head.php')?>
</head>
<body>
  <div class="container">
    <header class="page-header">
      <h1 class="jumbotron">응답결과</h1>
    </header>
    <section>
      <h2 class="btn btn-danger center-block"><?=$result?></h2>
    </section>
  </div>
</body>
</html>