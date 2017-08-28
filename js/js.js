
	$('.skil').each(function(){
		$(this).find('.skil_bar').animate({
			width:$(this).attr('data-percent')
		},6000);
	});
