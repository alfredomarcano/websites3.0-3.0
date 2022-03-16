var lowidth = window.screen.width;
var loheight = window.screen.height;

// ANIMACION DE LA SECCION 2
if(lowidth>= 820){
	$("document").ready(function(){
		var sc2_nav   = $('.sc2_nav');
		// var sc2_img   = $('.sc2-img');
		var sc2_banda = $('.sc2-banda');

			$(window).scroll(function () {
			    if ($(this).scrollTop() >= 150) {
			        sc2_nav.addClass('sc2_animateMe');
			        // sc2_img.addClass('nav_animation');
			        sc2_banda.show();
			    } 
			    // else {
			    //     sc2_nav.removeClass('sc2_animateMe');
			    //     // sc2_img.removeClass('img_animation');
			    //     sc2_banda.hide();
			    // }
			    // if ($(this).scrollTop() >= 750) {
			    //     sc2_nav.removeClass('sc2_animateMe');
			    //     // sc2_img.removeClass('img_animation');
			    //     // sc2_img.addClass('img_animation_active');
			    //     sc2_banda.hide();
			    // }
			});
	});

	// ANIMACION DE LA SECCION 3
	$("document").ready(function(){
		var sc3_nav = $('.sc3-nav');
		var sc3_banda = $('.sc3-banda');

		$(window).scroll(function () {
		    if ($(this).scrollTop() >= 750) {
		        sc3_nav.addClass('sc3_animateMe');
		        sc3_banda.show();
		    } 
		    // else {
		    //     sc3_nav.removeClass('sc3_animateMe');
		    //     sc3_banda.hide();
		    // }
		    // if ($(this).scrollTop() >= 1450) {
		    //     sc3_nav.removeClass('sc3_animateMe');
		    //     sc3_banda.hide();
		    // }
		});
	});

	// ANIMACION DE LA SECCION 3
	$("document").ready(function(){
		var sc4_nav = $('.sc4-nav');
		var sc4_banda = $('.sc4-banda');

		$(window).scroll(function () {
		    if ($(this).scrollTop() > 1450) {
		        sc4_nav.addClass('sc4_animateMe');
		        sc4_banda.show();
		    } 
		    // else {
		    //     sc4_nav.removeClass('sc4_animateMe');
		    //     sc4_banda.hide();
		    // }
		    // if ($(this).scrollTop() > 2050) {
		    //     sc4_nav.removeClass('sc4_animateMe');
		    //     sc4_banda.hide();
		    // }
		});
	});

	// ANIMACION DE LA SECCION 3
	$("document").ready(function(){
		var sc5_nav = $('.sc5-nav');
		var sc5_banda = $('.sc5-banda');

		$(window).scroll(function () {
		    if ($(this).scrollTop() > 2050) {
		        sc5_nav.addClass('sc5_animateMe');
		        sc5_banda.show();
		    } 
		    // else {
		    //     sc5_nav.removeClass('sc5_animateMe');
		    //     sc5_banda.hide();
		    // }
		    // if ($(this).scrollTop() > 2750) {
		    //     sc5_nav.removeClass('sc5_animateMe');
		    //     sc5_banda.hide();
		    // }
		});
	});

	$("document").ready(function(){
		var sc8_nav = $('.sc8-nav');
		var sc8_banda = $('.sc8-banda');

		$(window).scroll(function () {
		    if ($(this).scrollTop() > 2850) {
		        sc8_nav.addClass('sc8_animateMe');
		        sc8_banda.show();
		    } 
		    // else {
		    //     sc8_nav.removeClass('sc8_animateMe');
		    //     sc8_banda.hide();
		    // }
		    // if ($(this).scrollTop() > 3550) {
		    //     sc8_nav.removeClass('sc8_animateMe');
		    //     sc8_banda.hide();
		    // }
		});
	});

	$("document").ready(function(){
		var sc6_nav = $('.sc6-nav');
		var sc6_banda = $('.sc6-banda');

		$(window).scroll(function () {
		    if ($(this).scrollTop() > 3550) {
		        sc6_nav.addClass('sc6_animateMe');
		        sc6_banda.show();
		    } 
		    // else {
		    //     sc6_nav.removeClass('sc6_animateMe');
		    //     sc6_banda.hide();
		    // }
		    // if ($(this).scrollTop() > 4150) {
		    //     sc6_nav.removeClass('sc6_animateMe');
		    //     sc6_banda.hide();
		    // }
		});
	});


}
	$("document").ready(function(){
		var nave = $('.sc1-nav-mobile');

		$(window).scroll(function () {
		    if ($(this).scrollTop() > 15) {
		        nave.addClass('sc1-nav-mobile-fixed');
		    } else {
		        nave.removeClass('sc1-nav-mobile-fixed');
		    }
		    // if ($(this).scrollTop() > 1) {
		    // 	mod.addClass('modalfixed');
		    // }else{
		    // 	mod.removeClass('modalfixed');
		    // }
		});
	});