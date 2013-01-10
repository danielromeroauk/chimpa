<p id="vaciar">Vaciar carrito</p>

<script type="text/javascript">
  $("#vaciar").button();

  $("#vaciar").on("click", function() {
    location.replace("<?php echo get('webURL') . '/default/articulo/carrito/2'; ?>");
  });
</script>

<?php var_dump(SESSION("carrito")); ?>