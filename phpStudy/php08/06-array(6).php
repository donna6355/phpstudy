<?php
header('content-type:text/html;charset=utf-8;');

//배열 일괄 출력 : print_r()
//=>사람이 편하게 배열의 내용을 읽을 수 있게 표시한다.

$card1 = array(100,200,300);
$card2 = array('백','이백','삼백');

printf($card1);//Array
print_r($card1);//Array([0]=>100 [1]=>200 [2]=>30)

function print_array($arr){
  echo('<pre>');
  print_r($arr);
  echo('</pre>');
}

print_array($card1);

//배열인지 아닌지 확인 : is_array(배열명)
printf('<h1>%s</h1>',is_array($card1));

//두개의 변수가 모두 배열이면 합치자 : array_merge(배열1,배열2)
if( is_array($card1) && is_array($card2)){
  $newCard = array_merge($card1,$card2);
  print_array($newCard);
  
  //배열을 오름차순으로 정렬 sort()
  sort($newCard);
  print_array($newCard);
  //배열을 내림차순으로 정렬 rsort()
  rsort($newCard);
  print_array($newCard);
  
}


?>

<script>
  const $arrNames = ['홍길동','둘리','머털이'];
  const $arrId = ['hong','duli','MT'];
  
console.log(Array.isArray($arrNames));

const $str = '안녕하세요'
console.log(Array.isArray($str));//false

//두개의 변수가 모두 배열이면 합치자 : 기준배열명.concat(합쳐질 배열명1,합쳐질 배열병2,...)
if(Array.isArray($arrNames)&&Array.isArray($arrId)){
  const $mergeArr = $arrId.concat($arrNames);
  console.log($mergeArr);
}



</script>