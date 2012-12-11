<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta charset="utf-8" />
		<title><?php print $this->getTitle(); ?></title>

		<link rel="stylesheet" href="<?php print path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" />

		<link href="<?php print $this->themePath; ?>/css/kendo.common.min.css" rel="stylesheet" />
    <link href="<?php print $this->themePath; ?>/css/kendo.default.min.css" rel="stylesheet" />

		<link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet" />

		<?php print $this->getCSS(); ?>

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->

		<!--<script src="<?php #print $this->themePath; ?>/js/jquery.min.js"></script>-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="<?php print $this->themePath; ?>/js/kendo.web.min.js"></script>
    <script src="<?php print $this->themePath; ?>/js/chimpa.js"></script>

    <?php print $this->getJs(); ?>

	</head>

	<body>
    <div id="contenedor">
      <header>
        <h1>Construimportados.com <small>Control de inventarios</small></h1>
      </header>
      <nav id="menu-principal">
      	<ul>
      		<li>Lugar
            <ul>
              <li><a href="#">Agregar</a></li>
              <li><a href="#">Editar</a></li>
              <li><a href="#">Listado</a></li>
              </ul>
            </li>
    			<li>Usuarios
            <ul>
        			<li><a href="#">Agregar</a></li>
        			<li><a href="#">Editar</a></li>
        			<li><a href="#">Listado</a></li>
            </ul>
          </li>
    			<li>Remisiones
            <ul>
        			<li><a href="#">Compra</a></li>
        			<li><a href="#">Venta</a></li>
        			<li><a href="#">Rotación</a></li>
        			<li><a href="#">Entrega inmediata</a></li>
            </ul>
          </li>
    			<li>Artículos
            <ul>
        			<li><a href="#">Agregar</a></li>
        			<li><a href="#">Editar</a></li>
        			<li><a href="#">Listado</a></li>
        			<li><a href="#">Extracto</a></li>
        			<li><a href="#">Apartar</a></li>
            </ul>
          </li>
    			<li><a href="#">Remisiones pendientes</a></li>
    			<li><a href="#">Cerrar sesión</a></li>
      	</ul>
      </nav>
