<?php 

class Tdocumento extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Tdocumento'; 
	
	// Información sobre las asociaciones del modelo	
	
	//Validacion
	var $validate = array (
		'tdocumento' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Tipo de Documento.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'tdocumento';
	
	//Orden
	var $order = "Tdocumento.tdocumento";
}
?>