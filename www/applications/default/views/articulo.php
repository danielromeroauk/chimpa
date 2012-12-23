<?php
  $id           = isset($edit) ? recoverPOST("id", $data['id']) : recoverPOST("id");
  $descripcion  = isset($edit) ? recoverPOST("descripcion", $data['descripcion']) : recoverPOST("descripcion");
  $precio       = isset($edit) ? recoverPOST("precio", $data['precio']) : recoverPOST("precio");
  $porciva      = isset($edit) ? recoverPOST("porciva", $data['porciva']) : recoverPOST("porciva");
  $estado       = isset($edit) ? recoverPOST("estado", $data['estado']) : recoverPOST("estado");
  $unidad       = isset($edit) ? recoverPOST("unidad", $data['unidad']) : recoverPOST("unidad");
  $notas        = isset($edit) ? recoverPOST("notas", $data['notas']) : recoverPOST("notas");
  $accion       = isset($edit) ? "edit/$id" : "add";
  $boton        = isset($edit) ? "edit" : "save";
?>
<form action="<?php echo get('webURL'); ?>/default/articulo/<?php echo $accion; ?>" method="POST" class="forms">
  <h2><?php echo ($accion == "add") ? "Agregar" : "Editar"; ?> Artículo</h2>
  <p>
    <?php echo isset($alert) ? $alert : NULL; ?>
  </p>

  <table>
    <tr>
      <td class="right"><label for="id">Identificador:</label></td>
      <td><input type="text" name="id" id="id" value="<?php echo $id; ?>" <?php echo ($accion != "add") ? "readonly" : NULL; ?> required /></td>
    </tr>
    <tr>
      <td class="right"><label for="descripcion">Nombre:</label></td>
      <td><input type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion; ?>" required /></td>
    </tr>
    <tr>
      <td class="right"><label for="precio">Precio ($):</label></td>
      <td><input type="number" name="precio" id="precio" min="0.00" max="99999999.99" step="0.01" value="<?php echo $precio; ?>" required /></td>
    </tr>
    <tr>
      <td class="right"><label for="porciva">IVA (%):</label></td>
      <td><input type="number" name="porciva" id="porciva" min="0.00" max="99.99" step="0.01" value="<?php echo $porciva; ?>" required /></td>
    </tr>
    <?php if (isset($edit)) { ?>
      <tr>
        <td class="right"><label for="estado">Estado:</label></td>
        <td>
          <select name="estado" id="estado">
            <option value="1" <?php echo $estado ? 'selected' : NULL; ?> >Activo</option>
            <option value="0" <?php echo !($estado) ? 'selected' : NULL; ?> >Inactivo</option>
          </select>
      </td>
      </tr>
    <?php } #if ?>
    <tr>
      <td class="right"><label for="unidad">Medida:</label></td>
      <td>
        <select name="unidad" id="unidad">
          <?php
            foreach ($unidades as $medida) {
              echo '<option value="'. $medida['id'] .'" ';
              echo ($unidad == $medida['id']) ? 'selected' : NULL;
              echo '>'. $medida['nombre'] .'</option>';
            } #foreach ?>
          </select>
      </td>
    </tr>
    <tr>
      <td class="right"><label for="notas">Notas:</label></td>
      <td><input type="text" name="notas" id="notas" value="<?php echo $notas; ?>" /></td>
    </tr>
      <td class="right"> </td>
      <td><input type="submit" name="<?php echo $boton; ?>" id="<?php echo $boton; ?>" value="Guardar" /></td>
    </tr>
  </table>

</form>
