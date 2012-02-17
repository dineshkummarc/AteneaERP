<?php 

/**
 * Configuración.
 *
 * Almacena los parametros de Configuración del Sistema
 *
 * @package    Core
 * @author     Mauricio Panuncio(@panuweb) <panuweb@yahoo.com.ar>
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://www.ateneaerp.com.ar
 * @filesource
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');


/* Configuramos la Base de Datos */
/**
 * Establece el Servidor de la Base de Datos
 */
$config['db_server']= 'localhost';

/**
 * Establece el Usuario de la Base de Datos
 */
$config['db_user']	= '';

/**
 * Establece la Contraseña de la Base de Datos
 */
$config['db_pass']	= '';

/**
 * Establece el Nombre de la Base de Datos
 */
$config['db_name']	= '';

/**
 * Establece el prefijo de las Tablas de la Base de Datos
 */
$config['db_prefix']= 'atenea_';


?>