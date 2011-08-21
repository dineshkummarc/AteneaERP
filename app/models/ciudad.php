<?php

class Ciudad extends AppModel {
	// Es una buena práctica incluir esta variable
	var $name = 'Ciudad';

	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Provincia');
	
	//Validacion
	var $validate = array (
		'ciudad' => array (
			'novacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Tienes que escribir una ciudad.',
				'last' => true
			)
		),
		'cpostalA' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Codigo Postal (ingrerse 0000 si no sabe).',
			'last' => true
		)
	);	
	
	//Campo a mostrar
	var $displayField = 'ciudad';

	//Orden
	var $order = "Ciudad.ciudad";
}

?>
