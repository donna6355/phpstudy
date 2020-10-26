//언어선택에 대한 설정
$(function() {
	const $opt = $('.opt');
	const $langlist = $opt.find('.langlist');

	$('.opt #lang, .opt label').on('click', function() {
		$langlist.toggle(); //show()+hide()
	});

	$langlist.find('a').on('click', function(evt) {
		let $value = $(this).text();

		//언어선택시 입력상자 내용변경
		$opt.find('#lang').val($value);

		//언어목록에서 색상표시
		$(this).parent().addClass('on').siblings().removeClass('on');

		$langlist.hide();

		//선택한 언어 페이지로 이동
		document.location = $(this).attr('href');

		evt.preventDefault();
	});
});

//스크롤 이벤트를 이용한 원페이지 구현
$(function() {
	//declare
	const $gnb = $('header > .container > nav>.gnb>li>a ');
	const $atc = $('article.srv');
	let nowIdx = 0;
	let topVal = new Array();
	console.log($atc);

	for (let i = 0; i < $atc.length; i++) {
		topVal[i] = $atc.eq(i).offset().top;
	}

	//fn declare

	//event
	$gnb.on('click', function(evt) {
		nowIdx = $gnb.index(this);
		$('html,body').stop().animate({ scrollTop: topVal[nowIdx] });
		evt.preventDefault();
	});

	$(window).on('scroll', function() {
		let scrollTop = $(this).scrollTop();
	});
});
