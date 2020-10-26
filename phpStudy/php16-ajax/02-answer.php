<?php
  header("content-type:application/json;charset=utf-8;");

  include_once("../inc/helper.php");

  $ans = get('ans',0);
  $msg = "";

  if($ans===0){
    $msg = "정답을 입력하지 않았습니다.";
  }else{
    $ans = intval($ans);

    if($ans===300){
      $msg = "Q. 100+200 = ".$ans." !!! 정답입니다~!";
    }else{
      $msg = "Q. 100+200 = ".$ans." 이라구요? 다시한번 풀어보세요~!";
    }

  }

  //응답데이터 생성
  $data = array(
    "rt" => 'OK',
    'pubdate' => date('Y-m-d H:i:s', time()),
    'msg' => urlencode($msg)
  );


  //json 방식으로 인코딩  
  $json = urldecode(json_encode($data));

  echo($json);
?>