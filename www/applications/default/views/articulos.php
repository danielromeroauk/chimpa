<h2>Artículos</h2>
<table class="listado">
  <thead>
    <?php echo (isset($editar) && !$editar) ? NULL : "<th> </th>" ?>
    <th>Identificador</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>IVA (%)</th>
    <th>Estado</th>
    <th>Unidad</th>
    <th>Notas</th>
    <th>Apartados</th>
  </thead>
    <tbody>
    <?php
      foreach ($data as $articulo) {
        echo "<tr>";
        echo (isset($editar) && !$editar) ? NULL : '<td><a href="'. get("webURL") . '/default/articulo/edit/' . urlencode($articulo["id"]) .'" class="boton-edit">Editar</a></td>';
        echo "<td>". $articulo['id'] ."</td>";
        echo "<td>". $articulo['descripcion'] ."</td>";
        echo "<td>". $articulo['precio'] ."</td>";
        echo "<td>". $articulo['porciva'] ."</td>";
        echo "<td>". $articulo['estado'] ."</td>";
        echo "<td>". $articulo['unidad'] ."</td>";
        echo "<td>". $articulo['notas'] ."</td>";
        echo "<td>". $articulo['apartados'] ."</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>