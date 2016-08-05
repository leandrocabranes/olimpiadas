<?php
/* Smarty version 3.1.29, created on 2016-08-04 14:40:09
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\home\foro_posts.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a37df97c1005_09849131',
  'file_dependency' => 
  array (
    '3880f1c760e762e84fe3d9372c67de53c4b9e892' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\home\\foro_posts.tpl',
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
function content_57a37df97c1005_09849131 ($_smarty_tpl) {
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
      <h1>Foro piola</h1>
    </div>
  </div>
</div>
<div class="container">

<table class="responsive-table">
  <thead>
    <tr>
      <th data-field="titulo">Titulo</th>
      <th data-field="contenido">Contenido</th>
      <th data-field="autor">Autor</th>
      <th data-field="fecha">Fecha</th>
      <th data-field="puntos">Puntos</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pt_0_saved_item = isset($_smarty_tpl->tpl_vars['pt']) ? $_smarty_tpl->tpl_vars['pt'] : false;
$_smarty_tpl->tpl_vars['pt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['pt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['pt']->value) {
$_smarty_tpl->tpl_vars['pt']->_loop = true;
$__foreach_pt_0_saved_local_item = $_smarty_tpl->tpl_vars['pt'];
?>
    <tr>
      <td><a href="?view=foro&post=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['titulo'];?>
</a></td>
      <td style="width: 300px" class="truncate"><?php echo $_smarty_tpl->tpl_vars['pt']->value['contenido'];?>
</td>
      <td><a href="?view=perfil&user=<?php echo $_smarty_tpl->tpl_vars['pt']->value['id_autor'];?>
"><?php echo $_smarty_tpl->tpl_vars['pt']->value['autor'];?>
</a></td>
      <td><?php echo $_smarty_tpl->tpl_vars['pt']->value['fecha'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['pt']->value['puntos'];?>
</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['pt'] = $__foreach_pt_0_saved_local_item;
}
if ($__foreach_pt_0_saved_item) {
$_smarty_tpl->tpl_vars['pt'] = $__foreach_pt_0_saved_item;
}
?>
  </tbody>
</table>
</div>
<?php if (isset($_SESSION['username'])) {?>
<div class="fixed-action-btn">
  <a href="?view=postear&postear=post" class="btn-floating btn-large green accent-3">
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
