<section id="logueo">
	<p>
    <?php echo isset($alert) ? $alert : NULL; ?>
  </p>
  <img src="<?php print $this->themePath; ?>/img/inventario.jpg" />
	<form action="<?php echo get("webURL"); ?>/default/default/login" method="POST">
	  <label for="user">Usuario:</label>
	  <input type="text" name="user" id="user" />
	  <label for="pass">Password:</label>
	  <input type="password" name="pass" id="pass" />
	  <p><input type="submit" name="entrar" id="entrar" value="Entrar" /></p>
	</form>
</section>