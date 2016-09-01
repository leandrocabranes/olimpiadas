<?php
/* Smarty version 3.1.29, created on 2016-08-05 14:31:43
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\home\calendario.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a4cd7f6c86e1_02732307',
  'file_dependency' => 
  array (
    'c0a72ab72e60d02f17bed4615075f42d9a6ae9e3' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\home\\calendario.tpl',
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
function content_57a4cd7f6c86e1_02732307 ($_smarty_tpl) {
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
      <h2>Cronograma</h2>
    </div>
  </div>
  <div class="row evento">
    <?php
$_from = $_smarty_tpl->tpl_vars['evento']->value;
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
    <div class="card col m8 s12">
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Lugar: <?php echo $_smarty_tpl->tpl_vars['ev']->value['lugar'];?>

          <i class="material-icons right">more_vert</i><br>
          Hora: <?php echo $_smarty_tpl->tpl_vars['ev']->value['hora'];?>
hs<br>
          Fecha: <?php echo $_smarty_tpl->tpl_vars['ev']->value['fecha'];?>
</span>
        <p><a style="cursor: pointer" class="activator">Ver más</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Lugar: <?php echo $_smarty_tpl->tpl_vars['ev']->value['lugar'];?>

          <i class="material-icons right">close</i><br>
          Hora: <?php echo $_smarty_tpl->tpl_vars['ev']->value['hora'];?>
hs<br>
          Fecha: <?php echo $_smarty_tpl->tpl_vars['ev']->value['fecha'];?>
</span>
        <p><?php echo $_smarty_tpl->tpl_vars['ev']->value['desc'];?>
</p>
      </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_0_saved_local_item;
}
if ($__foreach_ev_0_saved_item) {
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_0_saved_item;
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
