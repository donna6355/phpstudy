<?
  header('content-type:text/html;charset=utf-8;');

  //리턴값을 가진 함수
  function sum($x,$y){
    $sum = $x + $y;

    //10보다 작을경우 함수종료(실행중단)
    if($sum<10){
      return;
      //return false;
    }

    return $sum;
  }

  $result_1 = sum(2,1);
  $result_2 = sum(3,5);
  $result_3 = sum(10,20);

  printf('%d <br /> %d <br /> %d <br />', $result_1, $result_2, $result_3);
?>