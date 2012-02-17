<?php 

/**
 * Funciones Básicas usadas en todos los Scripts
 *
 * PHP versions 4 and 5
 *
 * @package    Core
 * @author     Mauricio Panuncio(@panuweb) <panuweb@yahoo.com.ar>
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://www.ateneaerp.com.ar
 * @filesource
*/
/**
 * Importa la Configuracion del Sistema
 */
require('config.php');

/**
 * Genera una nueva conexión a la Base de Datos
 *
 * Utiliza los datos configurados en config.php para generar una
 * conexion a la base de datos y seleccion la Base de Datos indicada.
 * Devuelve un identificador de enlace a MySQL en caso de éxito o 
 * FALSE en caso de error .
 *
 * @global incorpora la variable $config al ambito de la función
 * @see config.php
 * @return recurso
 */
function db_connect() {
	global $config;
	if ( !($link=mysql_connect($config['db_server'], $config['db_user'], $config['db_pass'])) ) { echo "Error conectando a la Base de Batos."; exit(); }
	if (!mysql_select_db($config['db_name'],$link)){ echo "Error seleccionando la base de datos."; exit(); } 
	return $link;
}

function db_close($result, $link) {
	mysql_free_result($result);
	mysql_close($link);
}

/**
 * Realiza una consulta a la Base de Datos
 * @global string document the fact that this function uses $_myvar
 * @staticvar integer $staticvar this is actually what is returned
 * @param string $campos campos a obtener de la BBDD
 * @param string $tabla tabla donde se realiza la consulta
 * @param string $condicion clausula WHERE
 * @return array 
 */
function db_select($campos, $tabla, $condicion){
	global $config;
	
	if($condicion == ''){$condicion = '1';}
	$link = db_connect();
	$query = 'SELECT '.$campos.' FROM '.$config['db_prefix'].$tabla.' WHERE '.$condicion;
	$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) { $select[] = $line; }
  
	db_close($result,$link);

	return $select;
}

function create_menu() {
	$menu = '
		<li data-menu="contactos">Contactos</li>
		<li data-menu="facturas">Facturación</li>
		<li>Clientes</li>
		<li>Notas</li>
		<li data-menu="calendario">Calendario</li>';
	return $menu;
}

function create_menu_admin() {
	$menu = '<li>Ajustes</li>';
		$menu .= '
		<li data-menu="user">Personal</li>
		<li data-menu="users">Usuarios</li>';
		$menu .= '<li data-menu="help"><a href="http://demo.ateneaerp.com.ar/doc/" target="_blanck">Ayuda</a></li>';
	return $menu.current_user();
}

function current_user(){
	$usuario = db_select('id,user,groups,options,admin', 'users','user = "'.$_SESSION['user'].'"');
	return $_SESSION['user'];
}

?>