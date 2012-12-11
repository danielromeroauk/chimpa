<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta charset="utf-8" />
		<title><?php print $this->getTitle(); ?></title>

		<link type="text/css" href="<?php print path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" rel="stylesheet" />
		<link type="text/css" href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet" />

		<?php print $this->getCSS(); ?>

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->
	</head>

	<body>
    <div id="contenedor">
      <header>
        <h1>Construimportados.com <small>Control de inventarios</small></h1>
      </header>
      <nav id="menu-principal"></nav>
