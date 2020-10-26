<?php
  header("content-type:text/html;charset=utf-8;");

  //공통함수 모음 라이브러리
  include_once("../inc/helper.php");

  //파라미터 받기
  $user_name = post('user_name',false);
  $user_email = post('user_email',false);
  $user_tel = post('user_tel',false);

  $gender = post('gender',false);

  //하나라도 입력안된 값이 있다면 처음페이지로 이동
  if(!$user_name || !$user_email || !$user_tel || !$gender){
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
      <h1>3) 취미를 선택해 주세요.</h1>
    </header>
    <section>
      <form action="result.php" method="post">
        <!-- 이전 페이지에서 보내온 값에 대한 상태유지  -->
        <input type="hidden" name="user_name" value="<?=$user_name?>" />
        <input type="hidden" name="user_email" value="<?=$user_email?>" />
        <input type="hidden" name="user_tel" value="<?=$user_tel?>" />
        <input type="hidden" name="gender" value="<?=$gender?>" />

        <!-- 설문항목 -->
        <div class="checkbox">
          <label>
            <input type="checkbox" name="hobby[]" value="music" /> 음악감상
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="hobby[]" value="movie" /> 영화감상
          </label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="hobby[]" value="youtube" /> 너튜브감상
          </label>
        </div>

        <button class="btn btn-danger">결과보기</button>

      </form>
    </section>
  </div>
</body>

</html>