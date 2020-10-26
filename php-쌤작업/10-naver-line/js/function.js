//언어선택에 대한 설정
$(function() {
	const $opt = $('.opt');
	const $langlist = $opt.find('.langlist');

	$('.opt #lang, .opt label').on('click', function() {
		$langlist.toggle(); //show()+hide()
	});

	$langlist.find('a').on('click', function(evt) {
		const $value = $(this).text();

		//언어선택시 입력상자 내용변경
		$opt.find('#lang').val($value);

		//언어목록에서 색상표시
		$(this).parent().addClass('on').siblings().removeClass('on');

		$langlist.hide();

		//선택한 언어 페이지로 이동
		// document.location = $(this).attr('href');

		evt.preventDefault();
	});
});

//scroll 이벤트를 이용한 원페이지 구현
$(function() {
	//변수선언부
	const $gnb = $('header > .container > nav > .gnb > li > a');
	let nowIdx = 0;
	const arrTopVal = new Array();

	//각 article의 top값을 배열에 저장
	for (let i = 0; i < $gnb.length; i++) {
		arrTopVal[i] = $('article.srv').eq(i).offset().top;
	}

	//함수선언부

	//이벤트 등록
	$gnb.on('click', function(evt) {
		nowIdx = $gnb.index(this);
		$('html,body').stop().animate({
			scrollTop: arrTopVal[nowIdx] - 69
		});
	});

	$(window).on('scroll', function() {
		let scrollTop = $(this).scrollTop();

		for (let i = 0; i < $gnb.length; i++) {
			if (scrollTop >= arrTopVal[i] - 250) {
				$gnb.eq(i).parent().addClass('on').siblings().removeClass('on');
			} else if (scrollTop < arrTopVal[0] - 250) {
				$gnb.parent().removeClass('on');
			}
		}
	});
});
