<?
  header('content-type:text/html');

  //함수의 선언
  function sayHello(){
    echo('<h1>Hello PHP World~!</h1>');
    printf('<h1>Welcome to %s World~!</h1>','PHP');
  }

  sayHello();
  sayHello();
  sayHello();

?>

<script>
//1.선언식함수
function hello() {
  console.log('Hello~!');
}
hello(); //호출

//2.표현식함수
const hi = function() {
  console.log('Hi~!');
};
hi();
</script>