<?php
/* Smarty version 3.1.29, created on 2016-08-04 01:38:13
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\home\problema.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a2c6b5f19cf5_42215128',
  'file_dependency' => 
  array (
    '7d164d99456fc8c5e043ffbe151e578354fe0254' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\home\\problema.tpl',
      1 => 1470285492,
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
function content_57a2c6b5f19cf5_42215128 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="row">
    <div class="col s12">
      <h1><?php echo $_smarty_tpl->tpl_vars['problema']->value['titulo'];?>
</h1>
      <small><?php echo $_smarty_tpl->tpl_vars['problema']->value['fecha'];?>
</small>
    </div>
  </div>
  <!-- <div class="video-container">
    <iframe width="853" height="480" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['video'];?>
" frameborder="0" allowfullscreen></iframe>
  </div> -->
  <div class="row">
    <div class="col s12">
      <h2>Enunciado:</h2><br>
      <p><?php echo $_smarty_tpl->tpl_vars['problema']->value['cont'];?>
</p>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h3>Respuesta:</h3><br>
      <p><?php echo $_smarty_tpl->tpl_vars['problema']->value['resp'];?>
</p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h3>Comentarios:</h3>
    </div>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['resp']->value)) {?>
  <?php
$_from = $_smarty_tpl->tpl_vars['resp']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_rsp_0_saved_item = isset($_smarty_tpl->tpl_vars['rsp']) ? $_smarty_tpl->tpl_vars['rsp'] : false;
$_smarty_tpl->tpl_vars['rsp'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rsp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rsp']->value) {
$_smarty_tpl->tpl_vars['rsp']->_loop = true;
$__foreach_rsp_0_saved_local_item = $_smarty_tpl->tpl_vars['rsp'];
?>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12">
      <small><?php echo $_smarty_tpl->tpl_vars['rsp']->value['fecha'];?>
</small><br>
      <?php echo $_smarty_tpl->tpl_vars['rsp']->value['autor'];?>
:
    </div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['rsp']->value['comentario'];?>
</p>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['rsp'] = $__foreach_rsp_0_saved_local_item;
}
if ($__foreach_rsp_0_saved_item) {
$_smarty_tpl->tpl_vars['rsp'] = $__foreach_rsp_0_saved_item;
}
?>
  <?php }?>
</div>

<?php if (isset($_SESSION['username'])) {?>
<div class="container">
  <div class="col s12">
    <div class="row">
      <div class="col s12">
        <center>
          <div id="aviso"></div>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <textarea id="comentario" class="materialize-textarea"></textarea>
        <label for="comentario">Comentar</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field">
        <div class="col s12">
          <button class="btn-large" id="enviar">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
  window.onload = function() {
    document.getElementById('enviar').onclick = function() {
      var connect, comentario, form, result;
      comentario = document.getElementById('comentario').value;

      if (comentario != '') {

        form = 'comentario=' + comentario;

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
              location.href= '?view=problemas&problema=<?php echo $_GET['problema'];?>
';
            }
          } else if (connect.readyState != 4) {
            // procesando
            result = "<div class='chip amber white-text'>Procesando...";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
          }
        }
        connect.open('POST', '?view=problemas&problema=<?php echo $_GET['problema'];?>
', true);
        connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        connect.send(form);
      } else {
        // campos vacios
        result = "<div class='chip red white-text'>Error: el comentario está vacio";
        result += "<i class='material-icons'>close</i></div>";
        document.getElementById('aviso').innerHTML = result;
      }
    }
  }

<?php echo '</script'; ?>
>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
