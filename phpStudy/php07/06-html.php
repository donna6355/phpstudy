<?php
header('content-type:text/html;charset=utf-8;');

/*
htmlspecialchars(변환될문자열)

HTML에서 사용되는 특수문자를 변환
ex)
& => &amp;
" => &quot;
< => &lt;
> => &gt;
*/

$msg = "웹 프로그래밍 언어 <PHP> & <MySQL>를 소개합니다. \n PHP는 훌륭한 웹 프로그래밍 언어 입니다.";

$html = htmlspecialchars($msg);
echo($html);
echo('<hr />');


/*
줄바꿈 변환
<textarea>영역에서 사용자가 입력한 줄바꿈 문자는 '\n'으로 저장된다. 
그런데 html 입장에서는 '\n' 아무 의미가 없기 때문에 정상적으로 출력되지 못한다.  
그래서 '\n'을 <br />로 변환해야 하는데
이 때 사용되는 함수가 nl2br() 이다.
*/

$html2 = nl2br($html);
echo($html2);
echo('<hr />')
?>