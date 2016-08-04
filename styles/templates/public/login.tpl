<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="col s12">
    <div class="row">
      <div class="col s12">
        <h2 class="center-align">Inicio de sesión</h2>
      </div>
    </div>
    <div class="row">
      <div class="col s12">
        <center>
          <div id="aviso"></div>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input type="text" id="username">
        <label for="username">Nombre de usuario</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input type="password" id="password">
        <label for="password">Contraseña</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field">
        <center>
          <div class="col s12">
            <button class="btn-large" id="enviar">Ingresar</button>
          </div>
        </center>
      </div>
    </div>
  </div>
</div>

{include 'main/footer.tpl'}

<script>

$(function(){
  var aviso = $('#aviso');
    $('#enviar').on('click', function(){
      // mostramos el cartel de espera
      result = "<div class='chip amber white-text'>Procesando...";
      result += "<i class='material-icons'>close</i></div>";
      aviso.html(result);
      //Comenzamos a procesar la información
      var username, password, form;
      username = $('#username').val();
      password = $('#password').val();

      if (username != '' && password != '') {
        form = 'username=' + username + '&password=' + password;
        $.ajax({
          url: '?view=login',
          method: 'POST',
          dataType: 'text',
          data: form,
          success: function (xhr) {
            if (xhr == 1) {
              result = "<div class='chip green accent-4 white-text'>Conectado! Espere por favor...";
              result += "<i class='material-icons'>close</i></div>";
              aviso.html(result);
              setTimeout(function(){
                location.href = 'index.php';}, 500);
            } else if (xhr == 3) {
              result = "<div class='chip orange accent-4 white-text'>Su usuario está deshabilitado. ";
              result += "Comuniquese con el administrador de la página ante cualquier duda.";
              result += "<i class='material-icons'>close</i></div>";
              aviso.html(result);
            } else if (xhr == 2) {
              result = "<div class='chip red accent-4 white-text'>El usuario y contraseña no coinciden ";
              result += "<i class='material-icons'>close</i></div>";
              aviso.html(result);
            }
          },
          error: function () {
            result = "<div class='chip red accent-3 white-text'>¡Ha ocurrido un error!";
            result += "<i class='material-icons'>close</i></div>";
            aviso.html(result);
            console.error(xhr, status, err.toString());
          }
        });
      } else {
        result = "<div class='chip indigo accent-3 white-text'>No deje ningún campo vacio";
        result += "<i class='material-icons'>close</i></div>";
        aviso.html(result);
      }
    });
});

</script>

</body>
</html>
