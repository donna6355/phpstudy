<?php
  header("content-type:text/html;charset=utf-8;");
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>
</head>

<body>
  <div class="container">
    <header class="page-header">
      <h1>1) 개인정보를 입력해 주세요.</h1>
    </header>
    <section>
      <form action="q02.php" method="post">
        <div class="form-group">
          <label for="user_name">이름</label>
          <input class="form-control" type="text" id="user_name" name="user_name">
        </div>
        <div class="form-group">
          <label for="user_email">이메일</label>
          <input class="form-control" type="email" id="user_email" name="user_email">
        </div>
        <div class="form-group">
          <label for="user_tel">연락처</label>
          <input class="form-control" type="tel" id="user_tel" name="user_tel">
        </div>
        <button class="btn btn-primary" type="submit">다음단계</button>
      </form>
    </section>
  </div>
</body>

</html>