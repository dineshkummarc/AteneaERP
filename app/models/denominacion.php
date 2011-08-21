<?php 

class Denominacion extends AppModel{
 	// Es una buena pr�ctica incluir esta variable
	var $name = 'Denominacion'; 
	
	// Informaci�n sobre las asociaciones del modelo
	
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