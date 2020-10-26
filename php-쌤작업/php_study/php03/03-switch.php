<?
  header('content-type:text/html;charset=utf-8;');

  $grade = 'd';

  switch($grade){
    case "A":
      echo('90~100점 사이입니다.');
    break;
    case "B":
      echo('80~89점 사이입니다.');
      break;
    default:
      echo('80점 이하입니다.');
  }
?>