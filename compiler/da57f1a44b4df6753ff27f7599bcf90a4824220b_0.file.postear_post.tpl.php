<?php
/* Smarty version 3.1.29, created on 2016-08-04 15:03:24
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\home\postear_post.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a3836ce03937_56616966',
  'file_dependency' => 
  array (
    'da57f1a44b4df6753ff27f7599bcf90a4824220b' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\home\\postear_post.tpl',
      1 => 1470326791,
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
function content_57a3836ce03937_56616966 ($_smarty_tpl) {
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

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
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

<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
