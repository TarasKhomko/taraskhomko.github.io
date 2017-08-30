$(document).ready(function(){
	$('.skil').each(function(){
		$(this).find('.skil_bar').animate({
			width:$(this).attr('data-percent')
		},6000);
	});

 $(" a").mPageScroll2id({offset: 52,scrollSpeed: 15});
	
	
	particlesJS.load('particles-js', 'js/particles.json', function() {
  console.log('callback - particles.js config loaded');
});

	
		});



