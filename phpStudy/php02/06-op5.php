<?
header('content-type:text/html;charset=utf-8;');

$a = 100;
$b = 200;

$cond1 = $a > $b;//f
$cond2 = $a <= $b;//t

$result1 = $cond1 && $cond2;//f
$result2 = $cond1 || $cond2;//f
$result3 = !$result1;//!은 부정연산자

echo("첫번째 결과는 $result1 입니다.");
echo('첫번째 결과는' .$result1. '입니다.');
echo('두번째 결과는' .$result2. '입니다.');
echo('세번째 결과는' .$result3. '입니다.');
?>

<script>
  //&&, || 의 최근 사용 트렌드

  let a = parseInt(prompt('숫자입력'));
  let b = parseInt(prompt('숫자입력'));

  //a가 b보다 크면 'a가 더 큼'
  (a>b)&&document.write('a가 더 큼');
  //a가 b보다 크지 않으면 'b가 더 큼'
  (a>b) || document.write('b가 더 큼');

</script>