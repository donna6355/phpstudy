<?php
header('content-type:text/html;charset=utf-8;');

//2차원 배역 = 배열명[][] 형식으로 접근할 수 있다.

$myarray = array(
  array('홍길동','HTML','CSS'),
  array('둘리','JAVASCRIPT','JQEURY'),
  array('머털이','PHP','MYSQL')
);

//for문을 이용한 2차원 배열 출력
for($i = 0;$i<count($myarray);$i++){
  for($k = 0;$k<count($myarray[$i]);$k++){
    printf('<h1>%s번째 배열의 %s번째 값 = %s</h1>',$i+1,$k+1,$myarray[$i][$k]);
      }
}

printf('<h1>%s</h1>',$myarray[0][0]);//홍길동
printf('<h1>%s</h1>',$myarray[1][1]);//javascript

?>

<script>
//new Array()를 이용한 배열선언
const miarray = new Array(
  new Array('홍길동','HTML','CSS'),
  new Array('둘리','JAVASCRIPT','JQEURY','react'),
  new Array('머털이','PHP')
);

for(let i=0;i<miarray.length;i++){
  for (let k=0;k<miarray[i].length;k++){
    console.log(miarray[i][k])
  }
  console.log('---------')
}

//[]-대괄호를 이용한 배열선언
const myarray=[
  ['홍길동','HTML','CSS'],
  ['둘리','JAVASCRIPT','JQEURY'],
  ['머털이','PHP','MYSQL']
];
console.log(myarray[1][1]);
console.log(myarray[2][2]);
</script>