<?php 

class Cliente extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Cliente'; 
	
	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Tdocumento','fjuridica','iva','iibb');     
	
	//Validacion
	var $validate = array (
		'rsocial' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir una Razon Social.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'rsocial';
	
	//Orden
	var $order = "Cliente.rsocial";
}
?>