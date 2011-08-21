<?php

class Grupo extends AppModel{
 	// Es una buena práctica incluir esta variable
	var $name = 'Grupo';
 
    var $hasAndBelongsToMany = array(
        'Contacto' => array(
			'className'            => 'contacto',
			'joinTable'              => 'contactos_grupos',
			'with'                   => 'ContactoGrupo',
			'unique'                 => true
		)
	);             

	//Validacion
	var $validate = array (
		'grupo' => array (
			'rule' => 'notEmpty',
			'message' => 'Tienes que escribir un Grupo.',
			'last' => true
		)
	);
	
	//Campo a mostrar
	var $displayField = 'grupo';
	
	//Orden
	var $order = "Grupo.grupo";
 } ?>
