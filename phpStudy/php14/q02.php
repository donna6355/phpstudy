<?php
  header("content-type:text/html;charset=utf-8;");

  include_once("../inc/helper.php");

  //파라미터 받기. 만약 값이 없을 경우 기본값을 1로 설정
  $ans1 = get('ans1',1);

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
        Q2. 당신의 취미는 무엇입니까?
      </h1>
    </header>

    <section>
      <ul class="list-group">
        <li class="list-group-item"><a href="q03.php?ans1=<?=$ans1?>&ans2=1">음악감상</a></li>
        <li class="list-group-item"><a href="q03.php?ans1=<?=$ans1?>&ans2=2">영화감상</a></li>
        <li class="list-group-item"><a href="q03.php?ans1=<?=$ans1?>&ans2=3">스노보드</a></li>
        <li class="list-group-item"><a href="q03.php?ans1=<?=$ans1?>&ans2=4">사진촬영</a></li>
      </ul>
    </section>
  </div>


</body>

</html>