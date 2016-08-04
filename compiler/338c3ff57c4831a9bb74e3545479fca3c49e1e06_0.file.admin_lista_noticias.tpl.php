<?php
/* Smarty version 3.1.29, created on 2016-07-21 17:26:01
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\admin_lista_noticias.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5790e989ad30b8_28239425',
  'file_dependency' => 
  array (
    '338c3ff57c4831a9bb74e3545479fca3c49e1e06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\admin_lista_noticias.tpl',
      1 => 1469114759,
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
function content_5790e989ad30b8_28239425 ($_smarty_tpl) {
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
  <table class="striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Autor</th>
        <th>Título</th>
        <th>Contenido</th>
        <th>Fecha de creación</th>
      </tr>
    </thead>
    <tbody>
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
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['nt']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['nt']->value['autor'];?>
</td>
        <td><a href="?view=admin&admin=contenido&contenido=noticias&noticia=<?php echo $_smarty_tpl->tpl_vars['nt']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['nt']->value['titulo'];?>
</a></td>
        <td style="width: 300px" class="truncate"><?php echo $_smarty_tpl->tpl_vars['nt']->value['contenido'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['nt']->value['fecha'];?>
</td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['nt'] = $__foreach_nt_0_saved_local_item;
}
if ($__foreach_nt_0_saved_item) {
$_smarty_tpl->tpl_vars['nt'] = $__foreach_nt_0_saved_item;
}
?>
    </tbody>
  </table>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
