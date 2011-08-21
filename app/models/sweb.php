<?php 

class Sweb extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Sweb';

	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Tcontacto','Contacto');
	
	//Validacion
	var $validate = array (
		'sweb' => array (
			'novacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Tienes que escribir una direccion web.',
				'last' => true
			),
			'url' => array(
				'rule' => 'url',
				'message' => 'Tienes que escribir una direccion web valida.',
				'last' => true
			),
		)
	);
	
	//Campo a mostrar
	var $displayField = 'sweb';
	
	//Orden
	var $order = "Sweb.sweb";
 } ?>
