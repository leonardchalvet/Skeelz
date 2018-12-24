function sectionTeamCaroussel(){

	/* INIT */
	var containerEl = "#section-team .container-el";
	var el = "#section-team .container-el .el";

	var numberEl = $(el).length;
	var widthEl = $(el).css('width');
	var spaceEl = $(el).css('margin-right');

	var dataWidth = ((numberEl * parseInt(widthEl)) + (numberEl * parseInt(spaceEl)) - parseInt(spaceEl));
	$(containerEl).width(dataWidth + 'px');
	$(el + ':nth-child(' + Math.round(numberEl/2) + ')').addClass('active');
	$(el + '.active').prevAll().addClass('prev');
	$(el + '.active').nextAll().addClass('next');
	
	var drct;

	function prg(drct){

		/*
		if (drct === "next") {

			setTimeout(function(){ 
				$(el + ':first-child').insertAfter($(el + ':last-child'));
			}, 250);
			
		} else if (drct === "prev"){

			setTimeout(function(){ 
				$(el + ':last-child').insertBefore($(el + ':first-child'));
			}, 250);

		};*/

		var numberEl = $(el).length;
		var dataWidth = ((numberEl * parseInt(widthEl)) + (numberEl * parseInt(spaceEl)) - parseInt(spaceEl));
		$(containerEl).width(dataWidth + 'px');

		var countScroll = $(el + '.active').index();
		var dataScroll = ((countScroll * parseInt(widthEl)) + (countScroll * parseInt(spaceEl)) + (parseInt(widthEl) / 2));

		$(containerEl).css({
		  '-webkit-transform' : 'translateX(-' + dataScroll + 'px)',
		  '-moz-transform'    : 'translateX(-' + dataScroll + 'px)',
		  '-ms-transform'     : 'translateX(-' + dataScroll + 'px)',
		  '-o-transform'      : 'translateX(-' + dataScroll + 'px)',
		  'transform'         : 'translateX(-' + dataScroll + 'px)'
		});

	};

	prg();
	
	/* clearInterval(interval);
	var interval = setInterval(function() {
		
	}, 2000); */



	$(el).on('click', function() {
	    if ($(this).hasClass('prev')) {
			$(el).removeClass('active prev next');
			$(this).addClass('active');
			$(el + '.active').prevAll().addClass('prev');
			$(el + '.active').nextAll().addClass('next');
			prg('prev');
		}else if($(this).hasClass('next')){
			$(el).removeClass('active prev next');
			$(this).addClass('active');
			$(el + '.active').prevAll().addClass('prev');
			$(el + '.active').nextAll().addClass('next');
			prg('next');
		};
	});​


}


$(window).on('load', function() {
	sectionTeamCaroussel();
})