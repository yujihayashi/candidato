jQuery(document).ready(function ($) {
	// Metodo para calcular a largura de cada item do submenu
	$('#primary-navigation .sub-menu').each(function () {
		var count = 0;
		$(this).find('li').each(function () {
			count = $(this).width()+count;
			//console.log($(this).width());
		});
		$(this).width(count+1).css({marginLeft: '-'+count/2+'px'});
		//console.log('valor'+count);
	});
$('.lista-box .wp-post-image').each(function () {
	var leftMove = $(this).width()/2;
	console.log(leftMove);
	$(this).css({left: '50%', marginLeft: '-'+leftMove+'px'});
});


	// Apos calcular a largura, o submenu fica oculto
	$('.nav > li.menu-item-has-children').each(function () {
		//console.log('oi');
		$(this).find('.sub-menu').css({display: 'none'});
		if ($(this).hasClass('current-menu-item')) {
			$(this).find('.sub-menu').css({display: 'block'});
			$('.site-header-bottom').css({height: '40px'});
		} else if ($(this).hasClass('current-menu-parent')) {
			$(this).find('.sub-menu').css({display: 'block'});
			$('.site-header-bottom').css({height: '40px'});
		}
	});

	// Interacao para surgir o submenu e crescer a barra verde
	$('.site-header .nav > li.menu-item-has-children').hover(function () {
		$('.site-header-bottom').stop(true, true).delay(100).animate({height: '40px'}, {duration: 400, queue: true, easing: 'easeInOutExpo'});
		$('.site-header .nav > li.current-menu-parent .sub-menu, .site-header .nav > li.current-menu-item .sub-menu').stop(true, true).delay(200).fadeOut({duration: 200, queue: true, easing: 'easeInOutExpo'});
		$(this).find('.sub-menu').stop(true, true).delay(400).fadeIn({duration: 400, queue: true, easing: 'easeInOutExpo'});
	}, function () {
		if ($(this).hasClass('current-menu-item')) {
			$('.site-header-bottom').stop(true, true).delay(400).animate({height: '40px'}, {duration: 400, queue: true, easing: 'easeInOutExpo'});

		} else if ($(this).hasClass('current-menu-parent')) {
			$('.site-header-bottom').stop(true, true).delay(400).animate({height: '40px'}, {duration: 400, queue: true, easing: 'easeInOutExpo'});
		} else {
			$(this).find('.sub-menu').stop(true, true).delay(100).fadeOut({duration: 400, queue: true, easing: 'easeInOutExpo'});
			$('.site-header .nav > li.current-menu-parent, .site-header .nav > li.current-menu-item').find('.sub-menu').stop(true, true).delay(100).fadeIn({duration: 400, queue: true, easing: 'easeInOutExpo'});
			if ($('.site-header .nav > li.current-menu-parent, .site-header .nav > li.current-menu-item').hasClass('menu-item-has-children')) {

			} else {
				$('.site-header-bottom').stop(true, true).delay(400).animate({height: '10px'}, {duration: 400, queue: true, easing: 'easeInOutExpo'});
			}
		}
	});

	// Interacao com os boxs do rodape
	$('.lista-box .box > a').hover(function () {
		$(this).find('.content').animate({bottom: '0px'}, {duration: 600, queue: true, easing: 'easeInOutExpo'});
	}, function () {
		$(this).find('.content').animate({bottom: '-300px'}, {duration: 600, queue: true, easing: 'easeInOutExpo'});
	});
}); 