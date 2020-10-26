<?php
header('content-type:text/html;charset=utf-8;');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once('../inc/head.php')?>
</head>
<body>
  <div class="container">
    <header class="page-header">
      <h1 class="jumbotron">Q. 100+200 = ?</h1>
    </header>
    <section>
      <a href="02-to.php?ans=100" class="btn btn-primary">100</a>
      <a href="02-to.php?ans=200" class="btn btn-success">200</a>
      <a href="02-to.php?ans=300" class="btn btn-info">300</a>
      <a href="02-to.php?ans=400" class="btn btn-danger">400</a>
      <a href="02-to.php?ans=500" class="btn btn-warning">500</a>
    </section>
  </div>
</body>
</html>