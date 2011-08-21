<?php 

class Empresa extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Empresa'; 
	
	// Información sobre las asociaciones del modelo
	var $belongsTo = array('denominacion','iva','iibb');    
	
	//Validacion
	var $validate = array (
		'rsocial' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir una Razon Social.',
			'last' => true
		),
		'cuit' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir una CUIT.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'rsocial';
	
	//Orden
	var $order = "Empresa.rsocial";
}
?>