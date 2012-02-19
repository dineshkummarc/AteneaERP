function cargando(tipo) {
	if(tipo) { $('#cargando').animate( {opacity: 1}, 500); }
	else {$('#cargando').animate( {opacity: 0}, 500); }
}

function cargador(tipo, data) {
	$.ajax({
		async:false,
		contentType: "application/x-www-form-urlencoded",
		data: "tipo="+tipo+'&data='+data,
		dataType: "html",
		global: true,
		ifModified: false,
		processData:true,
		timeout: 10000,
		type: "POST",
		url: "/index.php",

		beforeSend: function(objeto){  cargando(true);  },
		complete: function(objeto, message){ cargando(false); pos_ajax('complete',tipo,data,objeto,message,''); },
		error: function(objeto, message, httpstatus){ pos_ajax('error',tipo,data,objeto,message,httpstatus) },
		success: function(datos){ pos_ajax('success',tipo,data,'',datos,'') }
    });
}

function pos_ajax(llamada, tipo, data, objeto, message, httpstatus) {
switch(llamada){
	
	case 'complete': break;
	case 'error':
		alert("Estas viendo esto por que fallé");
		alert("Pasó lo siguiente: "+message);
		alert("El servidor respondió: \n"+httpstatus);
	break;
	case 'success':		
		if(tipo == 'modulo'){
			parametros = message.substring(0,message.indexOf('|@|')).split(',');

			$('#title').html(parametros[0]);

			if (!$('#mod_css').length){ $("head").append("<link id='mod_css'>"); }
			css = $("#mod_css");
			css.attr({
				rel:  "stylesheet",
				type: "text/css",
				href: "/modulos/mod_"+data+"/mod_"+data+".css"
			});

			$.getScript("/modulos/mod_"+data+"/mod_"+data+".js", function(){ return true; });

			$('#cargador').html( message.substring(message.indexOf('|@|')+3) );

			//ver la forma de hacer una funcion que incluya todas las funciones que se activan al cargar la pagina, para que al momento de usar ayax se activen de nuevo
			$('select.fancy').chosen();
		}
	break;
}
}