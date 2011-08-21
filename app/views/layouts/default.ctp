<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>ATENEA ERP<?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('atenea');
		
		echo $this->Html->script('jquery');

		echo $scripts_for_layout;
	?>
<script type="text/javascript">

function enlace(url){
	$.ajax({
        url: url,
        beforeSend: function(objeto){
			$("#cargando").css("display", "inline");
        },
        dataType: "html",
        error: function(objeto, quepaso, otroobj){
			alert("Estas viendo esto por que fallé\n\nPasó lo siguiente: "+quepaso);
			$("#cargando").css("display", "none");
        },
        processData:true,
        success: function(datos){
			$("#cargando").css("display", "none");
			$("#content").html(datos);
			cambia_enlace(false);
        },
        type: "GET"
	});
}

function cambia_enlace(cond){
	if (cond) {
		$("a").click(function(evento){
			evento.preventDefault();
			enlace($(this).attr("href"));
		});
	}else {
		$("#content a").click(function(evento){
			evento.preventDefault();
			enlace($(this).attr("href"));
		});	
	}
}

$(document).ready(function(){
	cambia_enlace(true)
	
	ancho = $(window).width() - 49 - 20;
	$("#content,#cargando").css({width: ancho}); 
	
	alto = $(window).height() - 101 - 20;
	$("#content,#cargando").css({height: alto}); 
	
	// Setting up a interval, executed every 1000 milliseconds:
	meses = ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'];
	var par_impar = 1;
	setInterval(function(){
		var currentTime = new Date();
		var d = currentTime.getDate();
		var t = meses[currentTime.getMonth()];
		var h = currentTime.getHours();
		if(h<10){h="0"+h;}
		var m = currentTime.getMinutes();
		if(m<10){m="0"+m;}
		$("#sidebar").html("");
		$("#sidebar").append("<div class='fecha'><span class='num'>" + d + "</span><br/>" + t + "</div>");
		par_impar = par_impar+1;
		if((par_impar%2) == 0){
			$("#sidebar").append("<div class='hora'>" +h +":"+ m + "</div>");
		}else{
			$("#sidebar").append("<div class='hora'>" +h +" "+ m + "</div>");
		}
	},500);
	
	
})

$(function(){
	$('#nav>li').hover(
		function(){
			$('.submenu',this).stop(true,true).slideDown('fast');
		},
		function(){
			$('.submenu',this).slideUp('fast');
		}
	);
});



</script>
</head>
<body>
	<div id="container">
		<div id="sidebar">&nbsp;</div>
		<div id="header">
			<div id="logo">
				<img src="/logo_mini.png" />
			</div>
			<div id="menu">
			<ul id="nav">
				<li><a href="/inicio">Inicio</a></li>				
				<li><a href="/clientes">Clientes</a></li>
				<li><a href="#">Todos</a>
					<ul class="submenu">
			<?php
				// abrir un directorio y listarlo
				$ruta = "/home/siteat/public_html/app/controllers";
				$modulos = array();
				if (is_dir($ruta)) { 
					if ($dh = opendir($ruta)) { 
						while (($file = readdir($dh)) !== false) {
							if (is_file($ruta."/".$file)){
								$modulos[] = str_replace("_controller.php","",$file);
							}
						} 
					closedir($dh); 
					}
				}
				sort($modulos);
				for ($i = 0; $i<count($modulos); $i++) { 
					$url =  "http://www.ateneaerp.com.ar/".$modulos[$i];
					
					$originales = array("cpostales","swebs","tcontactos", 'tdocumentos', 'fjuridicas');
					$nuevos = array("C&oacute;digos Postales","Sitios Webs","Tipos Contacto", 'Tipo Documentos', 'Formas Juridicas');
					$ctrl= ucfirst(str_replace($originales, $nuevos, $modulos[$i]));
					echo "<li><a href='".$url."'>".$ctrl."</a></li>";
				}
?>
					</ul>
				</li>
			</ul>
			</div>
		</div>
		<?php echo $this->Session->flash(); ?>
		<div id="cargando" style="display:none;">&nbsp;</div>
		<div id="content">&nbsp;</div>
	</div>
</body>
</html>

