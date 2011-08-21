<?php 

class Iva extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Iva'; 
	
	// Información sobre las asociaciones del modelo   
	
	//Validacion
	var $validate = array (
		'iva' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Tipo de IVA.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'iva';
	
	//Orden
	var $order = "Iva.iva";
}
?>