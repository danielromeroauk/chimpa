$(document).on("ready", empezar);

function empezar() {

  $("button, input[type='submit']").addClass('btn');

  $(".boton-edit").button({
      icons: {
        primary: "ui-icon-pencil"
      }
  });

} // empezar