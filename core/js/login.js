function cargando(tipo) {
	if(tipo) { $('#submit').html('<div id="cargando"></div>') }
	else 	 { $('#submit').html('Acceder') }
}
function login() {
	if($('#user').val() == ''){$('#user').addClass('error'); $('#user').focus(); return false;}else{$('#user').removeClass('error');}
	if($('#pass').val() == ''){$('#pass').addClass('error'); $('#pass').focus(); return false;}else{$('#pass').removeClass('error');}
	
	$.ajax({
		async:false,
		contentType: "application/x-www-form-urlencoded",
		data: "ajax=true&user="+$('#user').val()+'&pass='+$('#pass').val(),
		dataType: "html",
		global: true,
		ifModified: false,
		processData:true,
		timeout: 10000,
		type: "POST",
		url: "/login.html",

		beforeSend: function(objeto){  cargando(true);  },
		complete: function(objeto, message){ cargando(false); },
		error: function(objeto, message, httpstatus){ alert(objeto + "\n" + message+ "\n" + httpstatus) },
		success: function(datos){ 
			err_user = '<div class="notice error error_login">' +
				'<span class="icon medium" data-icon="X"></span> Usuario Incorrecto' + 
				'<a href="#close" class="icon close" data-icon="x"></a>' +
				'</div>';

			err_pass = '<div class="notice error error_login">' +
				'<span class="icon medium" data-icon="X"></span>Contraseña Incorrecta' + 
				'<a href="#close" class="icon close" data-icon="x"></a>' +
				'</div>';
			
			login_ok = '<div class="notice success error_login">' +
				'<span class="icon medium" data-icon="C"></span> Usuario Logueado' + 
				'<a href="#close" class="icon close" data-icon="x"></a>' +
				'</div>';

			switch (datos){
				case '0' : $('#error').html(err_user); break;
				case '1' : $('#error').html(err_pass); break;
				case '2' :
					$('#error').html(login_ok);

					$(location).attr('href','/');
				break;
				default: alert(datos); break;
			}
			
			//necesario para que se muestren correctamente las notices
			$('.icon').each(function(){
				$(this).append('<span aria-hidden="true">'+$(this).attr('data-icon')+'</span>')
				.css('display', 'inline-block');
			});
		}
    });

}

$(document).ready(function(){
	// hide log in button etc. when form fields not filled
	
	$('input').keypress(function(e){
    	if(e.which == 13){ login(); }
    });

    $('#submit').click(function(){ login(); })
})

