$(window).on('load', function() {

	$('#section-join .container-tab .tab').click(function(){
		$('#section-join .container-tab .tab').removeClass('active');
		$(this).addClass('active');
		$('#section-join .container-el .el').removeClass('displayBlock active');
		$('#section-join .container-el .el:nth-child(' + ($(this).index() + 1) + ')').addClass('displayBlock').outerWidth();
		$('#section-join .container-el .el:nth-child(' + ($(this).index() + 1) + ')').addClass('active');
	})
	$('#section-join .container-tab .tab:nth-child(1)').click();

})