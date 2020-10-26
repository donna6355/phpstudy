<?php
  header("content-type:text/html;charset=utf-8;");
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>
  <style>
  fieldset {
    border: none;
  }

  legend {
    display: none;
  }
  </style>
</head>

<body>
  <div class="container">
    <h1 class="page-header">POST 방식의 전송</h1>

    <form action="02-action.php" method="post">
      <fieldset>
        <legend>로그인</legend>
        <div class="form-group">
          <label for="username">이름</label>
          <input class="form-control" type="text" id="username" name="username">
        </div>
        <div class="form-group">
          <label for="pwd">비번</label>
          <input class="form-control" type="text" id="pwd" name="pwd">
        </div>

        <button class="btn btn-primary">전송</button>
      </fieldset>
    </form>

  </div>
</body>

</html>