<?php 

class Telefono extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Telefono';

	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Tcontacto','Contacto');
	
	//Validacion
	var $validate = array (
		'telefono' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Telefono.',
			'last' => true
		)
	);
		
	//Campo a mostrar
	var $displayField = 'telefono';
	
	//Orden
	var $order = "Telefono.telefono";
 } ?>
