<?php 

class Denominacion extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Denominacion'; 
	
	// Información sobre las asociaciones del modelo
	
	//Validacion
	var $validate = array (
		'denominacion' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir una Denominacion.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'denominacion';
	
	//Orden
	var $order = "Denominacion.denominacion";
}
?>