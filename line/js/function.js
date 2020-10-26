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
