<?
header('content-type:text/html;charset=utf-8;');

//함수의 선언
function sayHello(){
  echo('<h1>hello php world</h1>');
  printf('<h1>welcome to %s World</h1>','PHP');
};

sayHello();
sayHello();
sayHello();
?>

<script>
  //1.선언식 함수
  function hello(){
    console.log('hello');
  }
  hello();//호출

  //2.표현식 함수
const hi = function(){
  console.log('hi');
};
hi();

</script>