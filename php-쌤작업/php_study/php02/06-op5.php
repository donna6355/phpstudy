<?
  header('content-type:text/html;charset=utf-8;');

  $a = 100;
  $b = 200;

  $cond_1 = $a > $b;//false
  $cond_2 = $a <= $b;//true

  $result_1 = $cond_1 && $cond_2;//false
  $result_2 = $cond_1 || $cond_2;//true

  $result_3 = !$result_1;//!은 부정연산자


  echo("첫번째 결과는 $result_1 입니다.");
  echo("두번째 결과는 $result_2 입니다.");
  echo("세번째 결과는 $result_3 입니다.");
?>

<script>
// &&,  || 의 최근 사용트렌드

let a = parseInt(prompt("숫자입력"));
let b = parseInt(prompt("숫자입력"));

//a가 b보다 크면 "a가 더 큼"
(a > b) && document.write("a가 더 큼");

//a가 b보다 크지 않으면 "b가 더 큼" 
(a > b) || document.write("b가 더 큼");
</script>