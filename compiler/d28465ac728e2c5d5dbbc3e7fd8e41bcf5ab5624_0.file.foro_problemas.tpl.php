<?php
/* Smarty version 3.1.29, created on 2016-08-05 00:43:53
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\home\foro_problemas.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a40b79e57d94_32759865',
  'file_dependency' => 
  array (
    'd28465ac728e2c5d5dbbc3e7fd8e41bcf5ab5624' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\home\\foro_problemas.tpl',
      1 => 1470368523,
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
function content_57a40b79e57d94_32759865 ($_smarty_tpl) {
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
      <h3>Problemas matemáticos</h3>
    </div>
  </div>
</div>
<div class="container">
<table class="responsive-table">
  <thead>
    <tr>
      <th data-field="titulo">Titulo</th>
      <th data-field="fecha">Fecha</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['problemas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pr_0_saved_item = isset($_smarty_tpl->tpl_vars['pr']) ? $_smarty_tpl->tpl_vars['pr'] : false;
$_smarty_tpl->tpl_vars['pr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pr']->value) {
$_smarty_tpl->tpl_vars['pr']->_loop = true;
$__foreach_pr_0_saved_local_item = $_smarty_tpl->tpl_vars['pr'];
?>
    <tr>
      <td><a href="?view=problemas&problema=<?php echo $_smarty_tpl->tpl_vars['pr']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pr']->value['titulo'];?>
</a></td>
      <td><?php echo $_smarty_tpl->tpl_vars['pr']->value['fecha'];?>
</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['pr'] = $__foreach_pr_0_saved_local_item;
}
if ($__foreach_pr_0_saved_item) {
$_smarty_tpl->tpl_vars['pr'] = $__foreach_pr_0_saved_item;
}
?>
  </tbody>
</table>
</div>
<?php if (isset($_SESSION['username']) && $_SESSION['permisos'] == 3) {?>
<div class="fixed-action-btn">
  <a href="?view=postear&postear=problema" class="btn-floating btn-large green accent-3">
    <i class="large material-icons">add</i>
  </a>
</div>
<?php }
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
