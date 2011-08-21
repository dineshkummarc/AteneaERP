<?php

class Provincia extends AppModel {
	// Es una buena práctica incluir esta variable
	var $name = 'Provincia';
	
	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Pais');
	
	//Validacion
	var $validate = array (
		'provincia' => array (
			'novacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Tienes que escribir una provincia.',
				'last' => true
			),
			'unico' => array(
				'rule' => 'isUnique',
				'message' => 'Ya hay una provincia con ese nombre.',
				'last' => true
			)
		),
		'prefijo_postal' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Prefijo Postal (ingrerse 0 si no sabe).',
			'last' => true
		)
	);	

	//Campo a mostrar
	var $displayField = 'provincia';

	//Orden
	var $order = "Provincia.pais_id, Provincia.provincia";
}

?>
