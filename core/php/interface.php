<?php
/**
 * Crea la Interfaz principal.
 *
 * Busca la plantilla principal y reemplaza las variables por los 
 * valores correspondientes
 *
 * @package    Core
 * @author     Mauricio Panuncio(@panuweb) <panuweb@yahoo.com.ar>
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://www.ateneaerp.com.ar
 * @filesource
*/

$fp = fopen('core/vistas/interface.vw',"r");		//Abrimos el archivo en modo lectura
while ($linea = fgets($fp,1024))					//Leemos linea por linea el contenido del archivo y reemplazamos la palabras claves
{
	$linea = str_replace('<at:menu />',	create_menu(),$linea);
	$linea = str_replace('<at:menuadmin />',	create_menu_admin(),$linea);
				
	echo $linea;
}

?>