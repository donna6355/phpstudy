<?php
header('content-type:text/html;charset=utf-8;');

//웹페이지에 출력할 데이터를 배열로 정의
$list = array('PHP','JSP','ASP');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <title>PHP</title>
</head>
<body>
  <h1>반복문을 이용한 데이터 출력</h1>
  <h2>방법1</h2>
  <ul>
    <?php
      for($i = 0; $i<count($list);$i++){
        echo('<li>'.$list[$i].'</li>');
      }
    ?>
  </ul>
  <hr />
  <h2>방법2</h2>
  <ol>
    <?php for($i=0;$i<count($list);$i++){?>
    <li><?=$list[$i]?></li>
    <?php }?>
  </ol>
</body>
</html>