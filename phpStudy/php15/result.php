<?php
  header("content-type:text/html;charset=utf-8;");

  include_once('../inc/helper.php');

  $user_name = post('user_name',false);
  $user_email = post('user_email',false);
  $user_tel = post('user_tel',false);
  $gender = post('gender',false);
  
  $hobby = post('hobby',false);

  if(!$user_name || !$user_email || !$user_tel || !$gender || !$hobby){
    redirect('q01.php','처음부터 다시 진행해 주세요~!');
  }

  //취미(체크박스)는 배열이기 때문에 문자열로 변환해야 출력 가능함
  $hobby_str = implode(',',$hobby);
  
?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>
</head>

<body>
  <div class="container">
    <header>
      <h1 class="jumbotron">결과보기</h1>
    </header>
    <section>
      <ul class="list-group">
        <li class="list-group-item">
          <h2 class="list-group-heading">이름</h2>
          <p class="list-group-text"><?=$user_name?></p>
        </li>
        <li class="list-group-item">
          <h2 class="list-group-heading">이메일</h2>
          <p class="list-group-text"><?=$user_email?></p>
        </li>
        <li class="list-group-item">
          <h2 class="list-group-heading">연락처</h2>
          <p class="list-group-text"><?=$user_tel?></p>
        </li>
        <li class="list-group-item">
          <h2 class="list-group-heading">성별</h2>
          <p class="list-group-text"><?=$gender?></p>
        </li>
        <li class="list-group-item">
          <h2 class="list-group-heading">취미</h2>
          <p class="list-group-text"><?=$hobby_str?></p>
        </li>
      </ul>
    </section>
  </div>
</body>

</html>