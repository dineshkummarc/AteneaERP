$(document).ready(function(){ 
	cargador( 'vista','users','' ); //Aplicacion por defecto
	$('aside li[data-menu]').click(function(){  cargador( 'vista',$(this).data('menu'),'' );  })
});