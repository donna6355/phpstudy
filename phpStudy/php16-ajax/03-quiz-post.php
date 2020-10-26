<?php
  header("content-type:text/html;charset=utf-8;");
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>

  <script>
  $(function() {

    const $frmQuiz = $(".frmQuiz");

    $frmQuiz.on('submit', function(evt) {

      //버튼을 눌러도 action 페이지로 이동하지 않음
      evt.preventDefault();

      $.ajax({
        url: $frmQuiz.attr('action'),
        type: 'post',
        dataType: 'json',
        data: $frmQuiz.serialize(), //{ans:200}
        success: function(res) {
          console.log(res);
          $("h1").text(res.msg);
          $("#ans").val("");
        }
      });

    });

  });
  </script>
</head>

<body>
  <div class="container">
    <header class="page-header">
      <h1 class="jumbotron">
        Q. 100+200 = ?
      </h1>
    </header>
    <section>
      <form class="frmQuiz" action="04-answer.php" method="post">
        <div class="form-group">
          <label for="ans">정답</label>
          <input class="form-control" type="text" id="ans" name="ans" />
        </div>

        <button class="btn btn-success">제출</button>
      </form>
    </section>
  </div>
</body>

</html>