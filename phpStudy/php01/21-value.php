<?
    header("content-type:text/html;charset=utf-8;");

    /*

    [php의 변수 타입]
    
    integer(정수), double(실수)
    string, boolean, null
    array, object
    
    */

    //$변수명 = 값;   (일반 변수 : let 안씀)
    //const $상수명 = 값;

    $msg = "이제 곧 끝날 시간";
    $blank = ""; //빈 문자열(홑따옴표도 가능)
    $age = 20; //정수 integer
    $point =  820.5; //실수 double
    $is_ok = true;

    //상수는 앞에 $ 많이 씀
    const $NATION = '한국';
    // NATION = 'KOREA';  

    echo($msg);
?>