<?php
/* Smarty version 3.1.29, created on 2016-07-26 19:31:53
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\calendario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57979e89e312e3_42328314',
  'file_dependency' => 
  array (
    'c9e66841081809b6e572180ade995cca4994754f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\calendario.tpl',
      1 => 1469554312,
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
function content_57979e89e312e3_42328314 ($_smarty_tpl) {
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
      <h2>Calendario:</h2>
    </div>
  </div>
  <table class="striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Autor</th>
        <th>Fecha del evento</th>
        <th>Lugar</th>
        <th>Descripción</th>
        <th>Fecha de modificación</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['calendario']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ev_0_saved_item = isset($_smarty_tpl->tpl_vars['ev']) ? $_smarty_tpl->tpl_vars['ev'] : false;
$_smarty_tpl->tpl_vars['ev'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ev']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ev']->value) {
$_smarty_tpl->tpl_vars['ev']->_loop = true;
$__foreach_ev_0_saved_local_item = $_smarty_tpl->tpl_vars['ev'];
?>
      <tr>
        <td><a href="?view=admin&admin=contenido&contenido=calendario&calendario=<?php echo $_smarty_tpl->tpl_vars['ev']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ev']->value['id'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['autor'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['fecha_e'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['lugar'];?>
</td>
        <td style="width: 300px" class="truncate"><?php echo $_smarty_tpl->tpl_vars['ev']->value['desc'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['fecha_c'];?>
</td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_0_saved_local_item;
}
if ($__foreach_ev_0_saved_item) {
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_0_saved_item;
}
?>
    </tbody>
  </table>
</div>
<div class="fixed-action-btn">
  <a href="?view=postear&postear=evento" class="btn-floating btn-large green accent-3">
    <i class="large material-icons">add</i>
  </a>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
