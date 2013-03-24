$(document).on("ready", empezar);

function empezar() {
  $("input[type='submit']").button();

  $("button").button();

  $(".boton-edit").button({
      icons: {
        primary: "ui-icon-pencil"
      }
  });

} // empezar