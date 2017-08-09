$(document).ready(function(){

    //dropdown menus
    $('ul.drop-menu').hide();
    $('i.drop-down').hide();
    $('button.drop-toggle').click(function() {
			$(this).siblings('ul.drop-menu').slideToggle();
			$(this).siblings('ul.drop-menu').toggleClass('open');
			$(this).children('i.drop-down').toggle();
			$(this).children('i.drop-up').toggle();
			console.log('drop-toggle button was clicked.');
    });

		// the search toggle


		$('div.search-toggle').click(function() {
			$('div.seach-form-container').toggleClass('open');
			$(this).toggleClass('open');
			$('div.search-toggle button.btn i.fa').toggleClass('fa-search');
			$('div.search-toggle button.btn i.fa').toggleClass('fa-times');
			$('div.search-form-container').slideToggle();
		});

		//gallery carousel setup

		 $('.responsive-slider').slick({
			 dots: true,
			 autoplay: true,
			 mobileFirst: true,
			 swipeToSlide: true,
			 slidesToShow: 1,
			 slidesToScroll: 1,
			 responsive: [
				 {
					 breakpoint: 767,
					 settings: "unslick"
				 }]
		 });

		$('.slick-arrow').html('<i class="fa"></i>');
		$('.slick-prev .fa').addClass('fa-chevron-circle-left');
		$('.slick-next .fa').addClass('fa-chevron-circle-right');


    console.log('document is ready.');

});
