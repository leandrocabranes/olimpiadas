<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="col s12">
    <div class="row">
      <div class="col s12">
        <h2 class="center-align">Crear un post</h2>
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
      <div class="input-field col m6 s12">
        <input type="text" id="titulo" placeholder="La regla de tres simple...">
        <label for="titulo">Título del post</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="contenido" class="materialize-textarea"></textarea>
        <label for="contenido">Contenido</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m5 s12">
        <input type="text" id="video">
        <label for="video">Video desde youtube</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field">
        <center>
          <div class="col s12">
            <button class="btn-large" id="enviar">Subir post</button>
          </div>
        </center>
      </div>
    </div>
  </div>
</div>

{include 'main/footer.tpl'}

<script>
  window.onload = function() {

    document.getElementById('enviar').onclick = function() {
      var connect, titulo, contenido, video, form, result;
      titulo = document.getElementById('titulo').value;
      contenido = document.getElementById('contenido').value;
      video = document.getElementById('video').value;

      if (titulo != '' && contenido != '' && video != '') {

        form = 'titulo=' + titulo + '&contenido=' + contenido + '&video=' + video;

        connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        connect.onreadystatechange = function() {
          if (connect.readyState == 4 && connect.status == 200) {
            // conexion exitosa
            if (parseInt(connect.responseText) == 1) {
              // conexion exitosa
              // redireccion
              result = "<div class='chip green accent-4 white-text'>Conectado! Espere por favor...";
              result += "<i class='material-icons'>close</i></div>";
              document.getElementById('aviso').innerHTML = result;
              location.href= '?view=foro';
            } else if (parseInt(connect.responseText) == 2) {
              // error, datos incorrectos
              result = "<div class='chip lime darken-3 white-text'>El nombre de usuario o correo ya existe";
              result += "<i class='material-icons'>close</i></div>";
              document.getElementById('aviso').innerHTML = result;
            } else {
              // error, datos incorrectos
              result = "<div class='chip red accent-3 white-text'>Ha ocurrido un error!";
              result += "<i class='material-icons'>close</i></div>";
              document.getElementById('aviso').innerHTML = result;
            }
          } else if (connect.readyState != 4) {
            // procesando
            result = "<div class='chip amber white-text'>Procesando...";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
          }
        }
        connect.open('POST', '?view=postear&postear=post', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
      } else {
        // campos vacios
        result = "<div class='chip red white-text'>Error: el titulo y/o contenido estan vacios";
        result += "<i class='material-icons'>close</i></div>";
        document.getElementById('aviso').innerHTML = result;
      }
    }
  }

</script>

</body>
</html>
