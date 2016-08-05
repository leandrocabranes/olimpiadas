<?php
/* Smarty version 3.1.29, created on 2016-08-05 10:13:17
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\public\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a490ed414021_35502099',
  'file_dependency' => 
  array (
    '592f31b02e764442ac29d2ec2714248496fe0296' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\public\\login.tpl',
      1 => 1470402794,
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
function content_57a490ed414021_35502099 ($_smarty_tpl) {
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
        <h3 class="center-align">Inicio de sesión</h3>
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

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>

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

<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
