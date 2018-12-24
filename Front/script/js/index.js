$(window).on('load', function() {

	function sectionQuotesCarousselQuotes(Delay, Section, El, Nav){
		
		El = Section + ' ' + El;
		Nav = Section + ' ' + Nav;

		var valDelay = 0;
		var numberEl = $(El).length;
		var countEl;
		
		var drtc;

		function prg(drtc){

			if (drtc === 'next') {
				countEl++;
			} else if (drtc === 'prev') {
				countEl--;
			};

			if (countEl <= numberEl && countEl >= 1) {


				$(El + '.active').removeClass('active displayBlock');
				
				
				$(El + ':nth-child('+countEl+')').addClass('displayBlock').outerWidth();
				$(El + ':nth-child('+countEl+')').addClass('active');

				clearInterval(interval);
				interval = setInterval(function() {
			      	prg('next');
			    }, valDelay);

			} else if (countEl < 1) {
				countEl = numberEl;
				prg();
			} else {
				countEl = 1;
				prg();
			};
			
		};

		function init(){	    
			$(El + ':nth-child(1)').addClass('active');
		};

		$(Nav + ':nth-child(2)').click(function(){
			clearInterval(interval);
			prg('next');
		})
		$(Nav + ':nth-child(1)').click(function(){
			clearInterval(interval);
			prg('prev');
		})

		init();

		var interval = setInterval(function() {
	    	prg('next');
	    }, valDelay);

	    valDelay = Delay;

	};

	sectionQuotesCarousselQuotes(
		7000,
		'#section-quotes',  
		".container-quotes .container-el .el",
		".container-btn .btn"
	);


	function sectionQuotesCarousselLogos(){
		var el = '.container-logos .container-el .el';
		var valDelay = 3000;
		var numberShowEl = 6;
		var numberWaitEl = $('.position-wait').length;
		var countNumberWaitEl = 0;

		function prg(){
			countNumberWaitEl++;
			var randomElShow = Math.floor(Math.random() * numberShowEl) + 1;
			if (randomElShow > numberShowEl) {
				randomElShow = 1;
			}
			$(el + '.position-' + randomElShow).addClass('slide-top');
			setTimeout(function(){ 
				$(el + '.position-' + randomElShow).removeClass(function (index, className) {
				    return (className.match (/\bposition-\S+/g) || []).join(' ');
				});

				$(el + '.slide-top').removeClass('slide-top active').addClass('position-wait wait-' + (countNumberWaitEl + numberWaitEl));

				$(el + '.wait-' + countNumberWaitEl).removeClass(function (index, className) {
				    $(this).removeClass('position-wait').addClass('position-' + randomElShow + ' slide-bottom');
				    return (className.match (/\bwait-\S+/g) || []).join(' ');
				});
				setTimeout(function(){ 
					$(el + '.slide-bottom').removeClass('slide-bottom').addClass('active');

					setTimeout(function(){ 
						prg();
					}, valDelay);
				}, 50);
			}, 500);
		}

		

		


		prg();

	}

	sectionQuotesCarousselLogos();

})