$(document).on("ready", empezar);

function empezar() {
  $("#menu-principal ul").kendoMenu();
  $("input[type='submit']").button();

  $(".boton-edit").button({
      icons: {
        primary: "ui-icon-pencil"
      }
  });

} // empezar