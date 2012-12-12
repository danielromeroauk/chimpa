<section id="contenido">
	<?php
    if(isset($view)) {
      $this->load($view, TRUE);
    }
  ?>
</section>
<section id="lateral1">
  <?php
  	if(isset($login)) {
      $this->load($login, TRUE);
  	}
  ?>
</section>