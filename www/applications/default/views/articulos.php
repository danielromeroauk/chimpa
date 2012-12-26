<h2>Artículos <?php echo isset($num_rows) ? "encontrados: ". $num_rows : NULL; ?></h2>
<form id="busqueda" method="POST" action="<?php echo get("webURL"); ?>/default/articulo/listado">
  <table>
    <tr>
      <td>
        <input type="text" name="filtro" id="filtro" placeholder="Buscar..." value="<?php echo recoverPOST('filtro'); ?>" />
      </td>
      <td>
        <input type="submit" name="filtrar" id="filtrar" value="Buscar" />
      </td>
    </tr>
  </table>
<ul>
<?php
  if(is_array($data)){
    foreach ($data as $articulo) {
      echo '<li class="articulo">';
        echo '<strong>'. $articulo['descripcion'] .'</strong>';
        echo '<br /><span>Código:</span> '. $articulo['id'];
        echo '<br /><span>Precio ($):</span> '. $articulo['precio'];
        echo '<br /><span>IVA (%):</span> '. $articulo['porciva'];
        echo '<br /><span>Estado:</span> ';
        echo ($articulo['estado'] == "1") ? 'Activo' : 'Desactivado';
        echo '<br /><span>Medida:</span> '. $articulo['unidad'];
        echo '<br /><span>Notas:</span> '. $articulo['notas'];
        echo '<br /><span>Apartados:</span> '. $articulo['apartados'] .'<br />';
        echo (empty($editar)) ? NULL : '<a href="'. get("webURL") . '/default/articulo/edit/' . urlencode($articulo["id"]) .'" class="boton-edit">Editar</a>';
      echo "</li>";
    }
  }
?>
</ul>
<section class="paginacion">
<?php
  for ($i=0; $i < ($num_rows/12); $i++) {
    echo '<button name="registro" value="'. ($i*12). '"';
    echo (recoverPOST("registro") == ($i*12)) ? ' disabled': NULL;
    echo '>'. ($i+1) .'</button>';
  }
?>
</section>
</form>