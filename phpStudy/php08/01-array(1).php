<?php
header('content-type:text/html;charset=utf-8;');

//배열 생성

$myarray = array('PHP','JSP','ASP');

//배열에 저장된 값 재할당
$myarray[0] = 'HTML';
$myarray[1] = 'CSS';
$myarray[2] = 'JAVASCRIPT';
$myarray[3] = 'JQUERY';

//배열에 저장된 값 출력
printf('<h1>%s</h1>',$myarray[0]);
printf('<h1>%s</h1>',$myarray[1]);
printf('<h1>%s</h1>',$myarray[2]);
printf('<h1>%s</h1>',$myarray[3]);

?>

<script>
//배열 생성

const myarray = ['PHP','JSP','ASP'];
let miarray = new Array('PHP','JSP','ASP');
</script>