<?php 

class Iibb extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Iibb'; 
	
	// Información sobre las asociaciones del modelo    
	
	//Validacion
	var $validate = array (
		'iibb' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Tipo de IIBB.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'iibb';
	
	//Orden
	var $order = "Iibb.iibb";
}
?>