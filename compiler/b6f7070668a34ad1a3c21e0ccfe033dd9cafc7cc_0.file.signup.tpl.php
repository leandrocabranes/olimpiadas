<?php
/* Smarty version 3.1.29, created on 2016-08-04 21:28:33
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\public\signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a3ddb1d31135_39372637',
  'file_dependency' => 
  array (
    'b6f7070668a34ad1a3c21e0ccfe033dd9cafc7cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\public\\signup.tpl',
      1 => 1470356912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/head.tpl' => 1,
    'file:main/header.tpl' => 1,
    'file:main/footer.tpl' => 1,
  ),
),false)) {
function content_57a3ddb1d31135_39372637 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="col s12">
    <div class="row">
      <div class="col s12">
        <h2 class="center-align">Registrarme</h2>
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

        <input type="text" id="username" class="tooltipped" data-position="top" data-delay="40" data-tooltip="Entre 6 y 20 caracteres">
        <label for="username">Nombre de usuario</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input type="password" id="password" class="tooltipped" data-position="top" data-delay="40" data-tooltip="Entre 6 y 20 caracteres">
        <label for="password">Contraseña</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6 offset-s3">
        <input type="email" id="correo" class="tooltipped" data-position="top" data-delay="40" data-tooltip="La cuenta de correo debe ser válida">
        <label for="correo">Correo electrónico</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m6 s12 offset-m3">
        <select id="avatar" class="icons">
          <option value="" disabled selected>Elija su personaje</option>
          <option value="riki" data-icon="styles/img/riki.jpg" class="circle">El comandante</option>
          <option value="gauss" data-icon="styles/img/gauss.jpg" class="circle">Gauss</option>
          <option value="raiz" data-icon="styles/img/raiz.jpg" class="circle">Un árbol</option>
        </select>
        <label for="">Selecciona</label>
      </div>
    </div>
    <div class="row">
      <div class="col m2 s12 offset-m3">
        <label>Fecha de nacimiento:</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m2 s12 offset-m3">
        <select id="dia">
          <option disabled selected>Día</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
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
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
      </div>
      <div class="input-field col m2 s12">
        <select id="mes">
          <option disabled selected>Mes</option>
          <option value="01">Enero</option>
          <option value="02">Febrero</option>
          <option value="03">Marzo</option>
          <option value="04">Abril</option>
          <option value="05">Mayo</option>
          <option value="06">Junio</option>
          <option value="07">Julio</option>
          <option value="08">Agosto</option>
          <option value="09">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
        </select>
      </div>
      <div class="input-field col m2 s12">
        <select id="anio">
          <option disabled selected>Año</option>
          <option value="1960">1955</option>
          <option value="1960">1956</option>
          <option value="1960">1957</option>
          <option value="1960">1958</option>
          <option value="1960">1959</option>
          <option value="1960">1960</option>
          <option value="1961">1961</option>
          <option value="1962">1962</option>
          <option value="1963">1963</option>
          <option value="1964">1964</option>
          <option value="1965">1965</option>
          <option value="1966">1966</option>
          <option value="1967">1967</option>
          <option value="1968">1968</option>
          <option value="1969">1969</option>
          <option value="1970">1970</option>
          <option value="1971">1971</option>
          <option value="1972">1972</option>
          <option value="1973">1973</option>
          <option value="1974">1974</option>
          <option value="1975">1975</option>
          <option value="1976">1976</option>
          <option value="1977">1977</option>
          <option value="1978">1978</option>
          <option value="1979">1979</option>
          <option value="1980">1980</option>
          <option value="1981">1981</option>
          <option value="1982">1982</option>
          <option value="1983">1983</option>
          <option value="1984">1984</option>
          <option value="1985">1985</option>
          <option value="1986">1986</option>
          <option value="1987">1987</option>
          <option value="1988">1988</option>
          <option value="1989">1989</option>
          <option value="1990">1990</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
          <option value="1994">1994</option>
          <option value="1995">1995</option>
          <option value="1996">1996</option>
          <option value="1997">1997</option>
          <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
        </select>
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

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>

  $(function(){
    $('select').material_select();
    var result, alerta, username, password, correo, dia, mes, anio, avatar, form;
    var user_len, pass_len, mail_arr, mail_pnt;
    var aviso = $('#aviso');

    $('#enviar').on('click', function () {
      // declaramos nuestras variables;
      result = "<div class='chip amber white-text'>Procesando...";
      result += "<i class='material-icons'>close</i></div>";
      aviso.html(result);

      username = $('#username').val(), password = $('#password').val();
      correo = $('#correo').val(), dia = $('#dia').val(), mes = $('#mes').val();
      anio = $('#anio').val(), avatar = $('#avatar').val();

      val = true;
      alerta_com = "<div class='chip purple accent-4 white-text'>";
      alerta_fin = "<i class='material-icons'>close</i></div>";
      alerta = alerta_com + "Se han encontrado los siguientes problemas:" + alerta_fin;
      user_len = username.length;
      pass_len = password.length;
      mail_arr = correo.indexOf('@');
      mail_pnt = correo.lastIndexOf('.');
      if (user_len < 6 || user_len > 20) {
        alerta += alerta_com + "El nombre de usuario debe tener entre 6 y 20 caracteres" + alerta_fin + "<br />";
        val = false;
      } if (mail_arr < 1 || mail_pnt < mail_arr+2 || mail_pnt+2 > correo.length) {
        alerta += alerta_com + "El formato del correo electrónico no es válido" + alerta_fin + "<br />";
        val = false;
      } if (pass_len < 6 || pass_len > 20) {
        alerta += alerta_com + "La contraseña debe tener entre 6 y 20 caracteres" + alerta_fin + "<br />";
        val = false;
      }

      if (username != '' && password != '' && correo != '' && dia != '' && mes != '' && anio != '' && avatar != '') {
        if (val == true) {
          form = 'username=' + username + '&password=' + password + '&correo=' + correo;
          form += '&dia=' + dia + '&mes=' + mes + '&anio=' + anio + '&avatar=' + avatar;

          $.ajax({
            url: '?view=signup',
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
                } else if (xhr == 2) {
                  result = "<div class='chip lime darken-3 white-text'>El nombre de usuario o correo ya existe";
                  result += "<i class='material-icons'>close</i></div>";
                  aviso.html(result);
                } else if (xhr == 3) {
                  result = "<div class='chip purple darken-1 white-text'>Los campos no cumplen con los requisitos";
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
          aviso.html(alerta);
        }
      } else {
        result = "<div class='chip red accent-3 white-text'>No deje ningún campo vacio (asegurese de haber elegido un avatar)";
        result += "<i class='material-icons'>close</i></div>";
        aviso.html(result);
      }
    });
  });
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
