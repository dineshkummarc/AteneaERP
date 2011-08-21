<?php

class Pais extends AppModel {
	// Es una buena práctica incluir esta variable
	var $name = 'Pais';
	
	//Validacion
	var $validate = array (
		'pais' => array (
			'novacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Tienes que escribir un pais.',
				'last' => true
			),
			'unico' => array(
				'rule' => 'isUnique',
				'message' => 'Ya hay un pais con ese nombre.',
				'last' => true
			)
		)
	);
	
	//Campo a mostrar
	var $displayField = 'pais';

	//Orden
	var $order = "Pais.pais";
}

?>



