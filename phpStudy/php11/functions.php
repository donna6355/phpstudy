<?php
// 자주 사용하는 기능들을 함수 형태로 정의하여 여러 php 페이지에서 include하여 사용하는 용도
function sum($x,$y){
return $x + $y;
}
function print_h1($str){
echo("<h1>".$str."</h1>\n");
}
?>