<?php
  header("content-type:text/html;charset=utf-8;");
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <?php include_once("../inc/head.php"); ?>
  <style>
  ol,
  li {
    margin-bottom: 20px;
    list-style: none;
  }
  </style>
  <script>
  $(function() {

    $("a").on('click', function(evt) {
      evt.preventDefault();

      const val = $(this).text();
      //console.log(val);

      $.ajax({
        url: "02-answer.php?ans=" + val,
        type: "get",
        dataType: "json",
        success: function(res) {
          console.log(res);

          $("h1").text(res.msg);
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
      <ol class="row">
        <li class="col-xs-3 center-block"><a href="#" class="btn btn-danger">100</a></li>
        <li class="col-xs-3 center-block"><a href="#" class="btn btn-primary">200</a></li>
        <li class="col-xs-3 center-block"><a href="#" class="btn btn-info">300</a></li>
        <li class="col-xs-3 center-block"><a href="#" class="btn btn-warning">400</a></li>
      </ol>
    </section>
  </div>
</body>

</html>