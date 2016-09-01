<?php
/* Smarty version 3.1.29, created on 2016-08-22 15:31:00
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\home\post.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bb44e42f28b2_35053720',
  'file_dependency' => 
  array (
    '0f65babb34beb2c2747d477feabbd596dc2b580f' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\home\\post.tpl',
      1 => 1470403966,
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
function content_57bb44e42f28b2_35053720 ($_smarty_tpl) {
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
      <h1><?php echo $_smarty_tpl->tpl_vars['post']->value['titulo'];?>
</h1>
      <small><?php echo $_smarty_tpl->tpl_vars['post']->value['fecha'];?>
</small>
      <p class="right-align"><?php echo $_smarty_tpl->tpl_vars['post']->value['autor'];?>
</p>
    </div>
  </div>
  <div class="video-container">
    <iframe width="853" height="480" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['video'];?>
" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="row">
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['post']->value['contenido'];?>
</p>
    </div>
    <div class="col s12">
      <h4>Puntos: <?php echo $_smarty_tpl->tpl_vars['post']->value['puntos'];?>
</h4>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h3>Comentarios:</h3>
    </div>
  </div>
  <?php if (isset($_smarty_tpl->tpl_vars['comment']->value)) {?>
  <?php
$_from = $_smarty_tpl->tpl_vars['comment']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_comm_0_saved_item = isset($_smarty_tpl->tpl_vars['comm']) ? $_smarty_tpl->tpl_vars['comm'] : false;
$_smarty_tpl->tpl_vars['comm'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['comm']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['comm']->value) {
$_smarty_tpl->tpl_vars['comm']->_loop = true;
$__foreach_comm_0_saved_local_item = $_smarty_tpl->tpl_vars['comm'];
?>
  <div class="row">
    <div class="col s12"><?php echo $_smarty_tpl->tpl_vars['comm']->value['autor'];?>
:</div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['comm']->value['contenido'];?>
</p>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['comm'] = $__foreach_comm_0_saved_local_item;
}
if ($__foreach_comm_0_saved_item) {
$_smarty_tpl->tpl_vars['comm'] = $__foreach_comm_0_saved_item;
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

$(function () {
  var aviso = $('#aviso'), result = "";
  $('#enviar').on('click'. function () {
    result = "<div class='chip amber white-text'>Procesando...";
    result += "<i class='material-icons'>close</i></div>";
    aviso.html(result);

    var comentario, form;
    comentario = $('#comentario').val();
    if (comentario != '') {
      form = 'comentario=' + comentario;
      $.ajax({
        url: '?view=foro&post=<?php echo $_GET['post'];?>
',
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
  })
});
<?php echo '</script'; ?>
>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
