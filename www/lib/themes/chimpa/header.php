<!DOCTYPE html>
<html lang="<?php print get("webLang"); ?>">
	<head>
		<meta charset="utf-8" />
		<title><?php print decode($this->getTitle()); ?></title>

		<link rel="stylesheet" href="<?php print path("vendors/css/frameworks/bootstrap/bootstrap.min.css", "zan"); ?>" />
    <link href="http://code.jquery.com/ui/1.9.2/themes/cupertino/jquery-ui.css" rel="stylesheet">
    <link href="<?php print $this->themePath; ?>/css/style.css" rel="stylesheet" />

		<?php print $this->getCSS(); ?>

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
			<!--[if lt IE 9]>
			  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
		<!-- Le styles -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script src="<?php print path("vendors/css/frameworks/bootstrap/js/bootstrap.js", "zan"); ?>"></script>
    <script src="<?php print path("vendors/css/frameworks/bootstrap/js/bootstrap-dropdown.js", "zan"); ?>"></script>
    <script src="<?php print $this->themePath; ?>/js/chimpa.js"></script>

    <?php print $this->getJs(); ?>

	</head>

	<body>
    <div id="contenedor">
      <header>
        <h1>adsiar.com <small>Control de inventarios</small></h1>
      </header>
      <?php
        if (SESSION("user")) {
          require_once 'menu.php';
        } #if
      ?>
