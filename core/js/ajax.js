function cargando(tipo) {
	if(tipo) { $('#cargando').animate( {opacity: 1}, 500); }
	else {$('#cargando').animate( {opacity: 0}, 500); }
}

function cargador(tipo, data) {
	$.ajax({
		async:false,
		contentType: "application/x-www-form-urlencoded",
		data: "param=tipo="+tipo+'||data='+data,
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
			title = message;
			title = title.substring(0,title.indexOf('|@|'));
			if(message=="success"){ $('#title').html(title); }

			if (!$('#mod_css').length){ $("head").append("<link id='mod_css'>"); }
			css = $("#mod_css");
			css.attr({
				rel:  "stylesheet",
				type: "text/css",
				href: "/modulos/"+data+"/estilos.css"
			});

			$.getScript("/modulos/"+data+"/js.js", function(){ return true; });
		}

		datos = message.substring(message.indexOf('|@|')+3);
		$('#cargador').html( datos );
		//ver la forma de hacer una funcion que incluya todas las funciones que se activan al cargar la pagina, para que al momento de usar ayax se activen de nuevo
		$('select.fancy').chosen();
	break;
}
}