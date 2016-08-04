<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="col s12">
    <div class="row">
      <div class="col s12">
        <h2 class="center-align">Crear un evento</h2>
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
        <input type="date" id="fecha_e">
      </div>
    </div>
    <div class="row">
      <div class="input-field col m2 s12">
        <select id="hora">
          <option value="" disabled selected>Elija la hora</option>
          <option value="06">6</option>
          <option value="07">7</option>
          <option value="08">8</option>
          <option value="09">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
        </select>
        <label for="hora">Hora</label>
      </div>

      <div class="input-field col m2 s12">
        <select id="minuto">
          <option value="" disabled selected>Elija minutos</option>
          <option value="00">00</option>
          <option value="15">15</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="40">40</option>
          <option value="45">45</option>
        </select>
        <label for="minuto">Minutos</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m6 s12">
        <input type="text" id="lugar">
        <label for="lugar">Lugar</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="descripcion" class="materialize-textarea"></textarea>
        <label for="descripcion">Descripción</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field">
        <center>
          <div class="col s12">
            <button class="btn-large" id="enviar">Crear evento</button>
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
      var connect, fecha_e, hora, minuto, descripcion, lugar, form, result;
      fecha_e = document.getElementById('fecha_e').value;
      descripcion = document.getElementById('descripcion').value;
      lugar = document.getElementById('lugar').value;
      hora = document.getElementById('hora').value;
      minuto = document.getElementById('minuto').value;

      if (fecha_e != '' && descripcion != '' && lugar != '' && hora != '' && minuto != '') {

        form = 'fecha_e=' + fecha_e + '&descripcion=' + descripcion + '&lugar=' + lugar + '&hora=' + hora + '&minuto=' + minuto;

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
              location.href= '?view=admin&admin=contenido&contenido=calendario';
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
        connect.open('POST', '?view=postear&postear=evento', true);
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
