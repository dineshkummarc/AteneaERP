<?php

class Fjuridica extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Fjuridica';

	//Validacion
	var $validate = array (
		'fjuridica' => array (
			'novacio' => array(
				'rule' => 'notEmpty',
				'message' => 'Tienes que escribir una Forma Juridica.',
				'last' => true
			)
		)
	);

	//Campo a mostrar
	var $displayField = 'fjuridica';
	
	//Orden
	var $order = "Fjuridica.fjuridica";
 } ?>
