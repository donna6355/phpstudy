<?php
header('content-type:text/html;charset=utf-8;');

$color = 'red';
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <?php if($color === 'blue'){?>
  <h1 style="color:red;">Hello PHP</h1>
  <?php }else{?>
  <h1 style="color:blue;">헬로 PHP</h1>
  <?php }?>
</body>
</html>