<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <center>
        <div id="aviso"></div>
      </center>
    </div>
  </div>
  <div class="row">
    <h3>Editar usuario: #{$user_info.id}</h3>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Nombre de usuario:</strong> {$user_info.username}
    </div>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Correo:</strong> {$user_info.correo}
    </div>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Fecha de Nacimiento:</strong> {$user_info.fecha_nacimiento}
    </div>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Avatar:</strong> {$user_info.avatar}
    </div>
    <div class="col m1 s3 offset-m3">
      <img class="circle responsive-img" src="styles/img/{$user_info.avatar}.jpg" alt="">
    </div>
  </div>
  <div class="row">
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Nivel de permisos:</strong> {$user_info.permisos}
    </div>
  </div>
  <div class="row">
    <div class="input-field col m4 offset-m3">
      <select id="activo">
        {if $user_info.activo eq "A"}
        <option value="A" selected>Habilitada</option>
        <option value="D">Deshabilitada</option>
        {else}
        <option value="A">Habilitada</option>
        <option value="D" selected>Deshabilitada</option>
        {/if}
      </select>
      <label>Estado de cuenta</label>
    </div>
  </div>
  <div class="row">
    <center>
      <button class="btn" id="enviar">Guardar</button>
    </center>
  </div>
</div>

<script>
window.onload = function() {
  document.getElementById('enviar').onclick = function() {
    var connect, activo, form, result;
    activo = document.getElementById('activo').value;
    if (activo != '') {

      form = 'activo=' + activo;
      console.log(form);

      connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      connect.onreadystatechange = function() {
        console.log("se creo la conexion")
        if (connect.readyState == 4 && connect.status == 200) {
          // conexion exitosa
          console.log("Se procesa la conexion")
          if (parseInt(connect.responseText) == 1) {
            // conexion exitosa
            // redireccion
            result = "<div class='chip green accent-4 white-text'>Conectado! Espere por favor...";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
            location.href= '?view=admin&admin=users&user={$user_info.id}';
          } else if (parseInt(connect.responseText) == 2) {
            // error, datos incorrectos
            console.log("ocurrio un error en la conexion a la db; pero entro")
            result = "<div class='chip blue accent-3 white-text'>Ha ocurrido un error";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
            console.log(connect.responseText);
          } else {
            // error, datos incorrectos
            console.log("ocurrio un error en la conexion a la db")
            result = "<div class='chip red accent-3 white-text'>Ha ocurrido un error";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
            console.log(connect.responseText);
          }
        } else if (connect.readyState != 4) {
          // procesando
          result = "<div class='chip amber white-text'>Procesando...";
          result += "<i class='material-icons'>close</i></div>";
          document.getElementById('aviso').innerHTML = result;
        }
      }
      connect.open('POST', '?view=admin&admin=users&user={$user_info.id}', true);
      connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      connect.send(form);
    } else {
      // campos vacios
      result = "<div class='chip red white-text'>Error: el usuario y/o nombre estan vacios";
      result += "<i class='material-icons'>close</i></div>";
      document.getElementById('aviso').innerHTML = result;
    }
  }
}
</script>

{include 'main/footer.tpl'}

</body>
</html>
