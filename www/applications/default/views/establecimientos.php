<h2>Establecimientos registrados</h2>
<table class="listado">
  <thead>
    <?php echo (isset($editar) && !$editar) ? NULL : "<th> </th>" ?>
    <th>Identificador</th>
    <th>Razón social</th>
    <th>Dirección</th>
    <th>Teléfono</th>
  </thead>
    <tbody>
    <?php
      foreach ($data as $lugar) {
        echo "<tr>";
        echo (isset($editar) && !$editar) ? NULL : '<td><a href="'. get("webURL") . '/default/establecimiento/edit/' . urlencode($lugar["id"]) .'" class="boton-edit">Editar</a></td>';
        echo "<td>". $lugar['id'] ."</td>";
        echo "<td>". $lugar['nombre'] ."</td>";
        echo "<td>". $lugar['direccion'] ."</td>";
        echo "<td>". $lugar['telefono'] ."</td>";
        echo "</tr>";
      }
    ?>
  </tbody>
</table>