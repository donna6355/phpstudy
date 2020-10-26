<?php
  header("content-type:text/html;charset=utf-8;");

  include_once("../inc/helper.php");

  $username = post('username',false);
  $pwd = post('pwd',false);

  //만약 값이 하나라도 없을경우 메세지 출력후 이전페이지로 강제 이동
  if($username===false || $pwd===false){
    redirect(false,'이름과 비번을 모두 입력해주세요~!');
  }

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>
</head>

<body>
  <div class="container">
    <h1 class="jumbotron">
      이름 : <?=$username?> <br />
      비번 : <?=$pwd?>
    </h1>
  </div>
</body>

</html>