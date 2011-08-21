<?php

class Tcontacto extends AppModel {
	// Es una buena práctica incluir esta variable
	var $name = 'Tcontacto';

	//Validacion
	var $validate = array (
		'tcontacto' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Tipo de Contacto.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'tcontacto';
	
	//Orden
	var $order = "Tcontacto.tcontacto";
}

?>
