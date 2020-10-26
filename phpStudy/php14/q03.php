<?php
  header("content-type:text/html;charset=utf-8;");

  include_once("../inc/helper.php");

  //파라미터 받기. 만약 값이 없을 경우 기본값을 1로 설정
  $ans1 = get('ans1',1);
  $ans2 = get('ans2',1);

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
        Q3. 당신의 성별은 무엇입니까?
      </h1>
    </header>

    <section>
      <ul class="list-group">
        <li class="list-group-item"><a href="result.php?ans1=<?=$ans1?>&ans2=<?=$ans2?>&ans3=<?=urlencode('여성')?>">여성</a></li>
        <li class="list-group-item"><a href="result.php?ans1=<?=$ans1?>&ans2=<?=$ans2?>&ans3=<?=urlencode('남성')?>">남성</a></li>
      </ul>
    </section>
  </div>


</body>

</html>