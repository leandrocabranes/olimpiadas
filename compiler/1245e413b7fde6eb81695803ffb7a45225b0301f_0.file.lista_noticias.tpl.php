<?php
/* Smarty version 3.1.29, created on 2016-07-21 04:17:18
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\home\lista_noticias.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579030aecdbaa1_53366603',
  'file_dependency' => 
  array (
    '1245e413b7fde6eb81695803ffb7a45225b0301f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\home\\lista_noticias.tpl',
      1 => 1469067437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/head.tpl' => 1,
    'file:main/header.tpl' => 1,
    'file:main/nav.tpl' => 1,
    'file:main/footer.tpl' => 1,
  ),
),false)) {
function content_579030aecdbaa1_53366603 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="col s12">
    <h1>Noticias</h1>
  </div>
  <div class="row">
    <?php
$_from = $_smarty_tpl->tpl_vars['noticias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_nt_0_saved_item = isset($_smarty_tpl->tpl_vars['nt']) ? $_smarty_tpl->tpl_vars['nt'] : false;
$_smarty_tpl->tpl_vars['nt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['nt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['nt']->value) {
$_smarty_tpl->tpl_vars['nt']->_loop = true;
$__foreach_nt_0_saved_local_item = $_smarty_tpl->tpl_vars['nt'];
?>
    <div class="col m4 s12">
      <div class="card small">
        <div class="card-image waves-effect waves-block waves-light">
          <img src="styles/img/noticias/<?php echo $_smarty_tpl->tpl_vars['nt']->value['imagen'];?>
.jpg" class="activator">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4 truncate"><?php echo $_smarty_tpl->tpl_vars['nt']->value['titulo'];?>
</span>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4 truncate"><?php echo $_smarty_tpl->tpl_vars['nt']->value['titulo'];?>
<i class="material-icons right">close</i></span>
          <p><?php echo $_smarty_tpl->tpl_vars['nt']->value['contenido'];?>
</p>
        </div>
        <div class="card-action">
          <a href="?view=index&index=noticias&noticia=<?php echo $_smarty_tpl->tpl_vars['nt']->value['id'];?>
">Leer noticia completa</a>
        </div>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['nt'] = $__foreach_nt_0_saved_local_item;
}
if ($__foreach_nt_0_saved_item) {
$_smarty_tpl->tpl_vars['nt'] = $__foreach_nt_0_saved_item;
}
?>
  </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
