<?php

class Direccion extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Direccion';

	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Tcontacto','Ciudad','Contacto');

	//Validacion
	var $validate = array (
		'direccion' => array (
			'novacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Tienes que escribir una direccion.',
				'last' => true
			)
		),
		'cpostalb' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Codigo Postal (ingrerse XXX si no sabe).',
			'last' => true
		)
	);

	//Campo a mostrar
	var $displayField = 'direccion';
	
	//Orden
	var $order = "Direccion.direccion";
 } ?>
