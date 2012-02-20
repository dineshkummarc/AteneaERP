<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<title>ATENEA ERP - Acceso</title>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script type="text/javascript" src="core/js/prettify.js"></script>
	<script type="text/javascript" src="core/js/kickstart.js"></script>
	
	<link rel="stylesheet" type="text/css" href="core/css/kickstart.css" />
	<link rel="stylesheet" type="text/css" href="core/css/auth.css" />

	<script type="text/javascript" src="core/js/prefixfree.min.js"></script>
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
		<form action="login.html" method="POST" id="login" class="vertical">
			<div class="col_2 center_form">
				<at:error />
				<input type="text" name="user" id="user" autocomplete="on" required placeholder="Usuario"/>
				<input type="password" name="pass" id="pass" required placeholder="Contrase&ntilde;a" autocomplete="off"/>
				<button type="submit" id="submit" class="blue pop center_button">Acceder</button>
				
			</div>
		</form>

		</article>
	</section>
</body>
</html>