<?php

/**
 * Get 파라미터 값을 수신하는 함수
 * $key - 파라미터명
 * $def - 값이 없을 경우에만 사용될 기본값
 */
function get($key, $def){
  
  //일단 기본값으로 변수생성
  $value = $def;

  //$key를 이름으로 하는 파라미터가 존재한다면
  if(isset($_GET[$key])){

    $value = $_GET[$key];

    //앞뒤 공백제거
    $value = trim($value);

    //길이가 1보다 작다면
    if(strlen($value)<1){
      //전달된 값이 없는 경우이므로 기본값으로 재설정
      $value = $def;
    }

  }

  //최종 리턴값
  return $value;

}
/**
 * Post 파라미터 값을 수신하는 함수
 * $key - 파라미터명
 * $def - 값이 없을 경우에만 사용될 기본값
 */
function post($key, $def){
    
  //일단 기본값으로 변수생성
  $value = $def;

  //$key를 이름으로 하는 파라미터가 존재한다면
  if(isset($_POST[$key])){

    $value = $_POST[$key];

    //앞뒤 공백제거
    $value = trim($value);

    //길이가 1보다 작다면
    if(strlen($value)<1){
      //전달된 값이 없는 경우이므로 기본값으로 재설정
      $value = $def;
    }

  }

  //최종 리턴값
  return $value;

}

  /**
   * redirect($url, $msg) 함수 제작
   * 
   * 특정 메세지를 표시한후, 지정된 페이지로 강제 이동시킨다.
   * 
   * $url : 이동할 페이지 경로, false로 지정한 경우 이전 페이지로 이동
   * 
   * $msg : 화면에 표시할 메세지, false인 경우 아무것도 표시 안함
   */

  function redirect($url, $msg){
     
    $html = '<!DOCTYPE html>';
    $html .= '<html lang="ko">';
    $html .= '<head>';
    $html .= '<meta charset="UTF-8">';

    //메세지가 전달된 경우
    if($msg !== false){
      $html .= "<script>alert('".$msg."');</script>";
    }

    //이동할 url이 전달된 경우
    if($url !== false){
      $html .= '<meta http-equiv="refresh" content="0; url='.$url.'">';
    }else{
      $html .= '<script>history.back();</script>';
    }

    $html .= '</head>';
    $html .= '<body></body>';
    $html .= '</html>';

    echo($html);
    exit();

   }


?>
