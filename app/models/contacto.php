<?php 

class Contacto extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Contacto'; 
	
	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Cliente','Denominacion');  
    var $hasAndBelongsToMany = array(
        'Grupo' => array(
			'className'            => 'grupo',
			'joinTable'              => 'contactos_grupos',
			'with'                   => 'ContactoGrupo',
			'unique'                 => true
		)
	);      
	
	//Validacion
	var $validate = array (
		'nombre' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Nombre.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'nombre';
	
	//Orden
	var $order = "Contacto.nombre";
}
?>
