<?php 
	session_start();

/**
 * Autenticacion.
 *
 * Establece las funciones para autenticación de usuario y comprueba las credenciales
 *
 * @package    Core
 * @author     Mauricio Panuncio(@panuweb) <panuweb@yahoo.com.ar>
 * @license    http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link       http://www.ateneaerp.com.ar
 * @filesource
*/
/**
 * Inicia una nueva sesion de usuario
 * 
 * @param string $user usuario que inicia sesión
 * @param string $pass contraseña del usuario que inicia sesión
 * @return string Devuelve un mensaje de error o nada si es correcto
 *
*/
function login_user($user,$pass){
	$usuario = db_select('user, pass', 'users','user = "'.$user.'"');

	if(count($usuario) === 0) {
		return '0';
	}else if($usuario[0]['pass'] !== md5($pass)) {
		return '1';
	} else {
		$_SESSION['login'] = true;
		$_SESSION['user'] = $user;

		return '2';

		//header('Location: /');
	}
}

/**
 * Termina la sesion actual
*/
function logout_user(){
	$_SESSION['login'] = false;
	$_SESSION['user'] = '';
	session_destroy();
}
	
if($_SESSION['login'] && $_POST['logout']){	logout_user(); }

if((!$_SESSION['login']|| !isset($_SESSION['login'])) && $_SERVER['REQUEST_URI'] != '/login.html'){ header('Location: login.html'); }

if( ( !$_SESSION['login'] || isset($_SESSION['login']) )  && $_POST['user'] != '' && $_POST['pass'] != '' ) { 
	echo login_user($_POST['user'],$_POST['pass']);
}

if($_SERVER['REQUEST_URI'] == '/login.html' && !$_POST['ajax']){ 

	$fp = fopen('core/vistas/auth.vw',"r");		//Abrimos el archivo en modo lectura
	while ($linea = fgets($fp,1024)) {	//Leemos linea por linea el contenido del archivo y reemplazamos la palabras claves
		$linea = str_replace('<at:error />', $error,$linea);

		echo $linea;
	}

	exit();
}

if($_POST['ajax']){ exit(); }

?>