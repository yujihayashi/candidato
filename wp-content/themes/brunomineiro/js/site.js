jQuery(document).ready(function ($) {
	// Metodo para calcular a largura de cada item do submenu
	$('#primary-navigation .sub-menu').each(function () {
		var count = 0;
		$(this).find('li').each(function () {
			count = $(this).width()+count;
			console.log($(this).width());
		});
		$(this).width(count+1).css({marginLeft: '-'+count/2+'px'});
		console.log('valor'+count);
	});
	// Apos calcular a largura, o submenu fica oculto
	$('#primary-navigation .sub-menu').css({display: 'none'});

	// Interacao para surgir o submenu e crescer a barra verde
	$('.site-header .nav > li.menu-item-has-children').hover(function () {
		$('.site-header-bottom').stop(true, true).delay(100).animate({height: '40px'}, {duration: 400, queue: true, easing: 'easeInOutExpo'});
		$(this).find('.sub-menu').stop(true, true).delay(400).fadeIn({duration: 400, queue: true, easing: 'easeInOutExpo'});
	}, function () {
		$('.site-header-bottom').stop(true, true).delay(400).animate({height: '10px'}, {duration: 400, queue: true, easing: 'easeInOutExpo'});
		$(this).find('.sub-menu').stop(true, true).delay(100).fadeOut({duration: 400, queue: true, easing: 'easeInOutExpo'});
	});

	// Interacao com os boxs do rodape
	$('.lista-box .box > a').hover(function () {
		$(this).find('.content').animate({bottom: '0px'}, {duration: 600, queue: true, easing: 'easeInOutExpo'});
	}, function () {
		$(this).find('.content').animate({bottom: '-300px'}, {duration: 600, queue: true, easing: 'easeInOutExpo'});
	});
}); 