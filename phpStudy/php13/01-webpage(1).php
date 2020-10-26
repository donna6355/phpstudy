<?php
header('content-type:text/html;charset=utf-8;');

$cont1 = '<h1>Hello PHP 7</h1>';
$cont2 = '<h2>PHP 웹서버 프로그래밍</h2>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>php</title>
</head>
<body>
 <!-- <h1>Hello PHP</h1> -->
 <h1><?php echo($cont1)?></h1>
 <h2><?php echo($cont2)?></h2>
 <h2><?=$cont2?></h2>
 <!-- <h2>PHP 웹프로그래밍</h2> -->
</body>
</html>
