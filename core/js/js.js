$(document).ready(function(){
	$('#configlist li:first-child').click(function() {
		altura = (($('#configlist li').length)*35)+'px';
		if($('#configlist').height() > 35) {
			$('#configlist').animate({ height: '35px' }, 500);
		}else{
			$('#configlist').animate({ height: altura }, 500);
		}
	});

	$('html').click(function() {
    	if($('#configlist').height() > 35) {
			$('#configlist').animate({ height: '35px' }, 500);
		}
	});

	$('#configlist li').click(function(e) {
		e.stopPropagation();
	})

});