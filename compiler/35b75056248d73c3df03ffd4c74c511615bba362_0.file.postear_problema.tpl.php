<?php
/* Smarty version 3.1.29, created on 2016-08-04 03:57:46
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\postear_problema.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a2a11aeb02f2_54429120',
  'file_dependency' => 
  array (
    '35b75056248d73c3df03ffd4c74c511615bba362' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\postear_problema.tpl',
      1 => 1470275856,
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
function content_57a2a11aeb02f2_54429120 ($_smarty_tpl) {
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
        <h2 class="center-align">Subir un problema</h2>
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
        <input type="text" id="titulo" placeholder="Si juan tiene tres manzanas...">
        <label for="titulo">Título del problema</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="contenido" class="materialize-textarea"></textarea>
        <label for="contenido">Enunciado</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="respuesta" class="materialize-textarea"></textarea>
        <label for="respuesta">Respuesta</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m5 s12">
        <input type="text" id="video">
        <label for="video">Video desde youtube (opcional)</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col m5 s12">
        <input type="text" id="imagen">
        <label for="imagen">Imagen del problema (opcional)</label>
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
      var connect, titulo, contenido, respuesta, video, imagen, form, result;
      titulo = document.getElementById('titulo').value;
      contenido = String(document.getElementById('contenido').value);
      respuesta = String(document.getElementById('respuesta').value);
      imagen = document.getElementById('imagen').value;
      video = document.getElementById('video').value;

      if (titulo != '' && contenido != '' && respuesta != '') {

        form = 'titulo=' + titulo + '&contenido=' + contenido + '&respuesta=' + respuesta + '&video=' + video + '&imagen=' + imagen;

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
        connect.open('POST', '?view=postear&postear=problema', true);
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
