<?php
header('content-type:text/html;charset=utf-8;');


for($i = 2;$i<10;$i++){
  for($k = 1;$k<10;$k++){
    $result = $i*$k;
    if($k===1){echo('<p>'.$i.'단 시작</p>');};
    echo('<p>'.$i.'x'.$k.'='.$result.'</p>');
    if($k===9){echo('<p>'.$i.'단 끝</p><hr />');};
  }
};

?>