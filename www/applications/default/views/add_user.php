<form action="<?php print path("default/usuario/agregar"); ?>" method="post">
  <fieldset>
    <p>
      <?php print isset($alert) ? $alert : NULL; ?>
    </p>
    <p>
      Cédula: <input type="text" name="id" value="<?php print recoverPOST("id"); ?>" />
    </p>
    <p>
      Nombres: <input type="text" name="nombres" value="<?php print recoverPOST("nombres"); ?>" />
    </p>
    <p>
      Apellidos: <input type="text" name="apellidos" value="<?php print recoverPOST("apellidos"); ?>" />
    </p>
    <p>
      Nickname: <input type="text" name="nickname" value="<?php print recoverPOST("nickname"); ?>" />
    </p>
    <p>
      Contraseña: <input type="password" name="password" value="<?php print recoverPOST("password"); ?>" />
    </p>
    <p>
      Rol:
      <select name="rol">
        <option value="0">Administrador</option>
        <option value="1">Bodeguero</option>
        <option value="2">Auditor</option>
        <option value="3">Vendedor</option>
        <option value="4">Remisionero</option>
      </select>
    </p>
    <p>
      Lugar:
      <!-- TODO Llenar esta lista con los datos de la base de datos -->
      <select name="lugar">
        <option value="19470973-2">19470973-2</option>
        <option value="19470973-3">19470973-3</option>
        <option value="194709736">194709736</option>
      </select>
    </p>
    <p>
      Estado:
      <select name="estado">
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
      </select>
    </p>
    <p>
      <input type="submit" name="add" value="Agregar" />
    </p>
  </fieldset>
</form>