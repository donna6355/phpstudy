<?
  header('content-type:text/html;charset=utf-8;');

  /**
   * PHP의 변수타입
   * 
   * integer(정수), double(실수)
   * string, boolean, null
   * array, object
   */

   //$변수명=값; 
   //const $상수명=값;

   $msg = "이제 곧 끝날 시간입니다."; //문장
   $blank = "";//빈 문자열(홑따옴표도 가능)
   $age = 20;//정수 integer
   $point = 820.5; //실수 double
   $is_ok = true;//boolean 값

   const NATION = '한국'; 
   //NATION = 'KOREA';//에러발생(상수는 재할당 불가)

  echo('<h1>msg='.$msg.'</h1>');

  echo('<h1>내 나이는 '.$age.'세 입니다.</h1>');
  
  $is_ok = false;//재할당
  echo('<h1>is_ok = '.$is_ok.'</h1>');

  /**
   * 점(.)은 문자열과 변수를 하나의 문장으로 연결해주는 연결연산자
   * 
   * true : 존재한다. 혹은 숫자 1
   *    echo()로 출력할 경우 1로 출력됨
   * 
   * false : 존재하지 않는다.
   *    존재하지 않는 값이므로 echo()로 출력할 경우 아무것도 표시되지 않는다.
   */
?>

<script>
console.log(false);
</script>