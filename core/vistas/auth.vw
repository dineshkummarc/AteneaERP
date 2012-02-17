<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>ATENEA ERP - Acceso</title>
	<link rel="stylesheet" type="text/css" href="core/css/auth.css" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="core/js/prefixfree.min.js"></script>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="core/js/login.js"></script>
</head>
<body>
	<header>
		<hgroup id="logo">
    		<h1>atenea<span>erp</span></h1>
    		<h2>planificador de recursos empresariales</h2>
   		</hgroup>
	</header>
	<section>
		<article>
		<form action="login.html" method="POST" id="login">
			<fieldset>
				<div id="error"><?php echo $error ?></div>
				<label for="user">Usuario</label>
				<input type="text" name="user" id="user" autocomplete="on" required placeholder="Usuario"/>
				
				<label for="pass">Contrase&ntilde;a</label>
				<input type="password" name="pass" id="pass" required placeholder="Contrase&ntilde;a" autocomplete="off"/>
				
				<input type="submit" id="submit" value="Acceder" />
			</fieldset>
		</form>

		</article>
	</section>
</body>
</html>