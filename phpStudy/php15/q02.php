<?php
  header("content-type:text/html;charset=utf-8;");

  //공통함수 모음 라이브러리
  include_once("../inc/helper.php");

  //파라미터 받기
  $user_name = post('user_name',false);
  $user_email = post('user_email',false);
  $user_tel = post('user_tel',false);

  //하나라도 입력안된 값이 있다면 이전페이지로 이동
  if(!$user_name || !$user_email || !$user_tel){
    redirect(false,'입력되지 않은 값이 있습니다. 다시 처음부터 진행해 주세요~!');
  }

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>
</head>

<body>
  <div class="container">
    <header class="page-header">
      <h1>2) 성별을 선택해 주세요.</h1>
    </header>
    <section>
      <form action="q03.php" method="post">
        <!-- 이전 페이지에서 보내온 값에 대한 상태유지  -->
        <input type="hidden" name="user_name" value="<?=$user_name?>" />
        <input type="hidden" name="user_email" value="<?=$user_email?>" />
        <input type="hidden" name="user_tel" value="<?=$user_tel?>" />

        <!-- 설문항목 -->
        <div class="radio">
          <label>
            <input type="radio" name="gender" value="male" /> 남성
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="gender" value="female" /> 여성
          </label>
        </div>
        <button class="btn btn-success">다음단계</button>
      </form>
    </section>
  </div>
</body>

</html>