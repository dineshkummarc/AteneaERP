$(document).ready(function(){
	// hide log in button etc. when form fields not filled
	
	$('input').keypress(function(e){
    	if(e.which == 13){
       		$('#login').submit();
       	}
    });
})