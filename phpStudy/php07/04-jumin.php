<?PHP
header('content-type:text/html;charset=utf-8;');
$jumin = '  0002153254467 ';
$jumin = trim($jumin);

$yy = substr($jumin,0,2);
$mm = substr($jumin,2,2);
$dd = substr($jumin,4,2);

$gencode = substr($jumin,6,1);
$gender = null;

if($gencode ==='1'||$gencode ==='2'){
  // $yy ='19'.$yy;
  //문자열이 결합된 결과를 리턴하는 함수
  $yy = sprintf('19%s',$yy);
}else{
  $yy = sprintf('20%s',$yy);
};

//남,여 확인
if($gencode ==='2'||$gencode ==='4'){
$gender = '여자';
}else{
$gender = '남자';
}


printf('<h1>%s년 %s월 %s일 - %s</h1>',$yy,$mm,$dd,$gender);
?>

<script>
let jumin = '  0002153254467 ';
jumin = jumin.trim();

let yy = jumin.substring(0,2);
let mm = jumin.substring(2,4);
let dd = jumin.substring(4,6) ;

let gencode = jumin.slice(6,7);
let gender = '여자';

if(gencode ==='1'||gencode ==='2'){
  yy='19'+yy;
}else{
  yy='20'+yy;
}

// if(gencode ===2||gencode ===4){
// gender = '여자';
// }else{
//   gender = '남자';
// }
if(gencode === '1'||gencode==='3') {gender = '남자'};

console.log('<h1>%s년 %s월 %s일 - %s</h1>',yy,mm,dd,gender);

</script>