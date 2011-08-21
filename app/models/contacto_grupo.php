<?php

class ContactoGrupo extends AppModel {
	// Es una buena práctica incluir esta variable
	var $name = 'ContactoGrupo';
	
	// Información sobre las asociaciones del modelo
	var $belongsTo = array('Contacto','Grupo');
}

?>
