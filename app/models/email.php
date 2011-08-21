<?php 

class Email extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Email';

	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Tcontacto','Contacto');
	
	//Validacion
	var $validate = array (
		'email' => array (
			'novacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Tienes que escribir un email.',
				'last' => true
			),
			'email' => array(
				'rule' => array('email', true),
				'message' => 'Tienes que escribir un email valido.',
				'last' => true
			),
		)
	);
	
	//Campo a mostrar
	var $displayField = 'email';
	
	//Orden
	var $order = "Email.email";
 } ?>
