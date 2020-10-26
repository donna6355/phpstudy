<?php
header('content-type:text/html;charset=utf-8;');

//PHP의 배열은 JS처럼 크기에 대한 제약이 없기 때문에 
//빈 배열을 먼저 생성한 후 내용을 점차 확장할 수 있다.

//빈 배열 생성
$myarray = array();

//반복문을 통해서 배열을 확장하여 값을 저장
for($i = 0;$i<5;$i++){
  $myarray[$i] = 10*$i;
}

$size = count($myarray);
printf("<h1>배열의 길이 : %d</h1>",$size);

for($i=0;$i<count($myarray);$i++){
  printf("<h1>배열의 %d번째 값 : %d</h1>",$i+1,$myarray[$i]);
}



//배열의 크기 조절 : count(배열명);


?>

<script>
let myarray = [];
let miarray = new Array();

for(let i=0;i<5;i++){
  myarray[i] = i*10;
}
for(let i=0;i<myarray.length;i++){
  console.log('배열의 %d번째 값 = %d',i+1,myarray[i]);
}
</script>