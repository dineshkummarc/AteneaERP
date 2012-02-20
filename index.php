<?php

/**
 * Inicio.
 *
 * Este script es llamado en primera instancia y pone en funcionamiento todo el programa.
 *
 * @package    Core
 * @author     Mauricio Panuncio(@panuweb) <panuweb@yahoo.com.ar>
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://www.ateneaerp.com.ar
 * @filesource
*/
/**
 * Establece las Rutas del Servidor
 * 
 * Vamos a tratar de determinar la ruta completa de servidor a la
 * carpeta "system" con el fin de reducir la posibilidad de problemas de ruta.
 *
*/
if (function_exists('realpath') AND @realpath(dirname(__FILE__)) !== FALSE) {
	$system_folder = str_replace("\\", "/", realpath(dirname(__FILE__))).'/'.$system_folder;
}

/**
* Define la ruta completa a este Archivo
*/
define('FCPATH', __FILE__);

/**
* Define el nombre de ESTE archivo. Comunmente "index.php"
*/
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

/**
* Define la Ruta completa a la carpeta de la Aplicación
*/
define('BASEPATH', $system_folder);

/**
* Define la Ruta completa a las librerias PHP
*/
define('LIBPHP', BASEPATH.'core/php/');

/**
* Define la Ruta completa a los Módulos
*/
define('MOD', BASEPATH.'modulos/');

/**
* Incluimos las Funciones Principales
*/
require_once( LIBPHP.'funciones.php' );

/**
* Incluimos la Autenticación
*/
require( LIBPHP.'auth.php' );

$tipo   = $_POST['tipo'];
$modulo = $_POST['modulo'];
$data   = $_POST['data'];

if ($modulo == '') {
	//echo 'ERROR: Parametros: <br /><br />';
	//foreach($parametros as $param => $clave){ echo $clave, ' = ', $param, '<br />'; }
	/**
	 * Incluimos la Interface
	 */
	require( LIBPHP.'interface.php' );
}else{
	$ruta_modulo = MOD.'mod_'.$modulo.'/mod_'.$modulo.'.php';
	if(file_exists($ruta_modulo)){ include($ruta_modulo);}
	else {echo "Error,|@|No se encuentra el Módulo";}
}
?>