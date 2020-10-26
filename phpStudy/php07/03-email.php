<?PHP
header('content-type:text/html;charset=utf-8;');

$email = 'webmaster00@kfm21.co.kr';

$pos = strpos($email,'@');
$user_id = substr($email,0,$pos);
printf('<p>아이디 : '.$user_id.'</p>');

//마지막 인자가 없으면 끝까지 추출한다.
$domain = substr($email,$pos+1);
printf('<p>아이디 : '.$domain.'</p>');


?>

<script>

let email = 'webmaster@kfm21.co.kr';

let pos = email.indexOf('@');
let user_id = email.substring(0,pos)
console.log('아이디는 %s',user_id);
let domain = email.slice(pos+1);
console.log('도메인은 %s',domain);
</script>