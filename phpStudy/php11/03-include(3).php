<?php
header('content-type:text/html;charset=utf-8;');
$num = 100;
echo('<h1>num = '.$num.'</h1>');//100

include_once('./inc2.php');//101
$num++;
echo('<h1>num = '.$num.'</h1>');//102

?>