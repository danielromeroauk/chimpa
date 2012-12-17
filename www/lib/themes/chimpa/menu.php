<nav id="menu-principal">
	<ul>
		<?php if(SESSION("rol") == 0) { ?>
      <li>Lugar
        <ul>
          <li><a href="<?php echo get("webURL"); ?>/default/establecimiento/add">Agregar</a></li>
          <li><a href="<?php echo get("webURL"); ?>/default/establecimiento/listado/true">Editar</a></li>
          <li><a href="<?php echo get("webURL"); ?>/default/establecimiento/listado">Listado</a></li>
          </ul>
        </li>
      <li>Usuarios
        <ul>
          <li><a href="#">Agregar</a></li>
          <li><a href="#">Editar</a></li>
          <li><a href="#">Listado</a></li>
        </ul>
      </li>
    <?php } #if ?>
    <li>Artículos
      <ul>
        <?php if(in_array(SESSION("rol"), array(0,4))) { ?><li><a href="#">Agregar</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0,4))) { ?><li><a href="#">Editar</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0))) { ?><li><a href="#">Extracto</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0,1,2,3,4))) { ?><li><a href="#">Listado</a></li><?php } #if ?>
        <?php if(in_array(SESSION("rol"), array(0,1,2,3,4))) { ?><li><a href="#">Apartar</a></li><?php } #if ?>
      </ul>
    </li>
    <?php if(in_array(SESSION("rol"), array(0,4))) { ?>
  		<li>Remisiones
        <ul>
    			<li><a href="#">Compra</a></li>
    			<li><a href="#">Venta</a></li>
    			<li><a href="#">Rotación</a></li>
    			<li><a href="#">Entrega inmediata</a></li>
        </ul>
      </li>
    <?php } #if ?>
		<?php if(in_array(SESSION("rol"), array(0,1,2,4))) { ?><li><a href="#">Remisiones pendientes</a></li><?php } #if ?>
		<li><a href="<?php echo get("webURL"); ?>/default/default/logout">Cerrar sesión <?php echo SESSION("user"); ?></a></li>
	</ul>
</nav>