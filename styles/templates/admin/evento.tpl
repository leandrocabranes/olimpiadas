<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h2>Evento a editar:</h2>
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
    <div class="col s12"><strong>ID</strong></div>
    <div class="col s12">
      <p>{$evento.id}</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Autor</strong></div>
    <div class="col s12">
      <p>{$evento.autor}</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Fecha del evento</strong></div>
    <div class="col s12">
      <p>{$evento.fecha_e}</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Lugar</strong></div>
    <div class="col s12">
      <p>{$evento.lugar}</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Descripción</strong></div>
    <div class="col s12">
      <p>{$evento.desc}</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Fecha de última modificación</strong></div>
    <div class="col s12">
      <p>{$evento.fecha_c}</p>
    </div>
  </div>
  <div class="divider"></div>
</div>

<!-- <script>
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
</script> -->

{include 'main/footer.tpl'}

</body>
</html>
