<?
  header('content-type:text/html;charset=utf-8;');

  $sum_odd = 0;
  $sum_even = 0;

  for($i=1;$i<=100;$i++){
    if($i%2===0){
      $sum_even += $i;
    }else{
      $sum_odd += $i;
    }
  }

  echo("<h1>".$sum_odd."</h1>");
  echo("<h1>".$sum_even."</h1>");
?>