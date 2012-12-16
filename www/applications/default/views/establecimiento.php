<?php
  $id = isset($edit) ? recoverPOST("id", $data['id']) : recoverPOST("id");
  $nombre = isset($edit) ? recoverPOST("nombre", $data['nombre']) : recoverPOST("nombre");
  $direccion = isset($edit) ? recoverPOST("direccion", $data['direccion']) : recoverPOST("direccion");
  $telefono = isset($edit) ? recoverPOST("telefono", $data['telefono']) : recoverPOST("telefono");
?>
<form action="<?php echo get('webURL'); ?>/default/establecimiento/add" method="POST" class="forms">
  <h3>Agregar Establecimiento</h3>
  <p>
    <?php echo isset($alert) ? $alert : NULL; ?>
  </p>

  <table>
    <tr>
      <td class="right"><label for="id">Identificador:</label></td>
      <td><input type="text" name="id" id="id" value="<?php echo $id; ?>" /></td>
    </tr>
    <tr>
      <td class="right"><label for="nombre">Nombre:</label></td>
      <td><input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" /></td>
    </tr>
    <tr>
      <td class="right"><label for="direccion">Dirección:</label></td>
      <td><input type="text" name="direccion" id="direccion" value="<?php echo $direccion; ?>" /></td>
    </tr>
    <tr>
      <td class="right"><label for="telefono">Teléfono:</label></td>
      <td><input type="text" name="telefono" id="telefono" value="<?php echo $telefono; ?>" /></td>
    </tr>
    <tr>
      <td class="right"> </td>
      <td><input type="submit" name="save" id="save" value="Guardar" /></td>
    </tr>
  </table>

</form>
