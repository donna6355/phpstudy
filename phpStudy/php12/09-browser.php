<?php
header('content-type:text/html;charset=utf-8;');
include_once('../php11/functions.php');
function get_browser_name(){
  $browser_list = array('trident', 'msie', 'chrome', 'firefox', 'iphone', 'ipad', 'android', 'safari', 'none');

 $browser_name = 'none';

 $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);


    //strpos(변수명, 찾을문자열)
    //1, 2, 100 => true
    //0 => false

  for($i = 0;$i<count($browser_list);$i++){
    if(strpos($user_agent,$browser_list[$i])){
      $browser_name = $browser_list[$i];
    break;
    }

  }

  return $browser_name;
}
$mybrowser = get_browser_name();
print_h1($mybrowser);
?>
