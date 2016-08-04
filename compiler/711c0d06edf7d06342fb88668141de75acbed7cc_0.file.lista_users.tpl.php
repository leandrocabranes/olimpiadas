<?php
/* Smarty version 3.1.29, created on 2016-07-20 19:27:28
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\lista_users.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578fb480b3ab35_17421694',
  'file_dependency' => 
  array (
    '711c0d06edf7d06342fb88668141de75acbed7cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\lista_users.tpl',
      1 => 1469035605,
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
function content_578fb480b3ab35_17421694 ($_smarty_tpl) {
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
  <h1 class="center-align">Usuarios</h1>
  <h5>administración</h5>
  <div class="row">
    <table class="bordered striped responsive-table">
      <thead>
        <tr>
          <th>Nombre de usuario</th>
          <th>Correo</th>
          <th>Fecha de nacimiento</th>
          <th>Avatar</th>
          <th>Permisos</th>
          <th>Estado de cuenta</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_usr_0_saved_item = isset($_smarty_tpl->tpl_vars['usr']) ? $_smarty_tpl->tpl_vars['usr'] : false;
$_smarty_tpl->tpl_vars['usr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['usr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['usr']->value) {
$_smarty_tpl->tpl_vars['usr']->_loop = true;
$__foreach_usr_0_saved_local_item = $_smarty_tpl->tpl_vars['usr'];
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['username'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['correo'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['fecha_nacimiento'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['avatar'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['usr']->value['permisos'];?>
</td>
          <?php if ($_smarty_tpl->tpl_vars['usr']->value['activo'] == "A") {?>
          <td>Activa</td>
          <?php } else { ?>
          <td>Deshabilitada</td>
          <?php }?>
          <td><a href="?view=admin&admin=users&user=<?php echo $_smarty_tpl->tpl_vars['usr']->value['id'];?>
" class="btn cyan accent-4">Editar</a></td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['usr'] = $__foreach_usr_0_saved_local_item;
}
if ($__foreach_usr_0_saved_item) {
$_smarty_tpl->tpl_vars['usr'] = $__foreach_usr_0_saved_item;
}
?>
      </tbody>
    </table>
  </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
