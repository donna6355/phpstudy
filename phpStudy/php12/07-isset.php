<?php
header('content-type:text/html;charset=utf-8;');

include_once('../php11/functions.php');

// 검사할 변수 선언
$name = 'PHP - 개발자';
$date['name'] = 'PHP - 프로그래머';
// 검사결과를 저장할 함수
$chk1 = isset($name);
$chk2 = isset($age);
$chk3 = isset($data['name']);  
$chk4 = isset($data['age']);

if($chk1){
  print_h1('name 변수가 존재합니다.');
}else{
  print_h1('name 변수가 존재하지 않습니다.');
}

  if($chk2){
    print_h1('age 변수가 존재합니다.');
  }else{
    print_h1('age 변수가 존재하지 않습니다.');
  }

  if($chk3){
    print_h1("data['name'] 배열이 존재합니다.");
  }else{
    print_h1("data['name'] 배열이 존재하지 않습니다.");
  }

  if($chk4){
    print_h1("data['age'] 배열이 존재합니다.");
  }else{
    print_h1("data['age'] 배열이 존재하지 않습니다.");
  }

?>