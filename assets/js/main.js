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
			 dots: false,
			 arrows: false,
			 autoplay: true,
			 mobileFirst: true,
			 swipeToSlide: true,
			 slidesToShow: 1,
			 slidesToScroll: 1,
			 responsive: [
				 {
					 breakpoint: 599,
					 settings: "unslick"
				 }]
		 });


    console.log('document is ready.');

});
