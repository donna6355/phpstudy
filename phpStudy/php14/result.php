<?php
  header("content-type:text/html;charset=utf-8;");

  include_once("../inc/helper.php");

  //파라미터 받기. 만약 값이 없을 경우 기본값을 1로 설정
  $ans1 = get('ans1',1);
  $ans2 = get('ans2',1);
  $ans3 = get('ans3',1);

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>
</head>

<body>

  <div class="container">
    <header>
      <h1 class="jumbotron">
        응답결과
      </h1>
    </header>

    <section>
      <ol class="list-group">
        <li class="list-group-item">
          <h2 class="list-group-item-heading">1번 문항 응답</h2>
          <p class="list-group-item-text"><?=$ans1?>번</p>
        </li>
        <li class="list-group-item">
          <h2 class="list-group-item-heading">2번 문항 응답</h2>
          <p class="list-group-item-text"><?=$ans2?>번</p>
        </li>
        <li class="list-group-item">
          <h2 class="list-group-item-heading">3번 문항 응답</h2>
          <p class="list-group-item-text"><?=$ans3?></p>
        </li>
      </ol>
    </section>
  </div>


</body>

</html>