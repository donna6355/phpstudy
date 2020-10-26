<?php
  header('content-type:text/html;charset=utf-8;');
  function sayHello(){
    echo('안녕 PHP');
  }
  function getMsg($msg){
    return '즐거운 '.$msg;
  }
  ?>
  <!DOCTYPE html>
  <html lang="ko">
  <head>
    <meta charset="UTF-8">
    <title>PHP</title>
  </head>
  <body>
    <h1><?php sayHello()?></h1>
    <h1><?=sayHello()?></h1>
    <h2><?=getMsg('추석')?></h2>
  </body>
  </html>