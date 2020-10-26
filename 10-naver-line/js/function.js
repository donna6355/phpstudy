$(function(){

    const $opt = $(".lang-opt");
    const $langlist = $opt.find(".langlist");
    const nationList = ['ja','ko','en','en-US','zh-hans','zh-hant','th','id','vi','pt-BR','ms','en','hi','es-MX','tr','es-AR','ru','it','de','fr'];
    $langlist.hide();

    $(".lang-opt #lang, .lang-opt label").on('click',function(){
        $langlist.toggle();
    });

    
    $langlist.find('a').on('click',function(evt){
        evt.preventDefault();
        //클릭하면 input [value] 값 바뀌게 하기
        const $value = $(this).text();

        // $("#lang").attr('value',$value); 아래 위 둘다 가능~
        $opt.find("#lang").val($value);
        $langlist.hide();
        
        //목록에서 색상 표시
        $(this).parent().addClass('on').siblings().removeClass('on')
        
        //각 나라별 페이지 이동하기
        let nowIdx = $langlist.find('a').index(this);
        document.location = 'https://line.me/' + nationList[nowIdx];
    });
});