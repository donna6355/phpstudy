
<?php

//요청에 응답할 컨텐츠 형식 지정
header("content-type:application/json;charset=utf-8;");

include_once("../inc/helper.php");

$ans = post('ans',false);
$msg = "";

if(!$ans){ //$ans===false
  $msg = "정답을 입력하지 않았습니다.";
}else{
  $msg = intval($msg);
  if($ans===300){
    $msg = "Q. 100+200 = ".$ans." !!! 정답입니다~!";
  }else{
    $msg = "Q. 100+200 = ".$ans." 이라구요? 다시한번 풀어보세요~!";
  }
}

//실제로 전달될 데이터
$data = array(
  'rt' => 'OK',
  'pubDate' => date('Y-m-d H:i:s',time()),
  'msg' => urlencode($msg)
);


//JSON방식으로 인코딩
$json = urldecode(json_encode($data));

echo($json);
?>