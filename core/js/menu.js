$(document).ready(function(){ 
	cargador( 'modulo','users' ); //Aplicacion por defecto
	$('aside li[data-menu]').click(function(){  cargador( 'modulo',$(this).data('menu') );  })
});