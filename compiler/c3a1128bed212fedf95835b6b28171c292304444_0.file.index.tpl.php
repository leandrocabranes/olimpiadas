<?php
/* Smarty version 3.1.29, created on 2016-08-04 14:32:56
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\home\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a37c48f1e453_42282794',
  'file_dependency' => 
  array (
    'c3a1128bed212fedf95835b6b28171c292304444' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\home\\index.tpl',
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
function content_57a37c48f1e453_42282794 ($_smarty_tpl) {
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
      <a href="?view=calendario">Ver más</a>
    </div>
  </div>
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
  <div class="row light-blue lighten-3 hide-on-small-only evento">
    <div class="col m2">
      <h1 class="white-text hora-med"><?php echo $_smarty_tpl->tpl_vars['ev']->value['hora'];?>
hs</h1>
    </div>
    <div class="col m3 fecha-med">
      <h1 class="white-text"><?php echo $_smarty_tpl->tpl_vars['ev']->value['fecha'];?>
</h1>
    </div>
    <div class="col m7 descripcion-med"><br>
      <span class="white-text"><?php echo $_smarty_tpl->tpl_vars['ev']->value['desc'];?>
</span>
    </div>
  </div>
  <?php
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_0_saved_local_item;
}
if ($__foreach_ev_0_saved_item) {
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_0_saved_item;
}
?>
  <table class="responsive-table striped hide-on-med-and-up">
    <thead>
      <tr>
        <th>Hora</th>
        <th>Fecha</th>
        <th>Descripcion</th>
      </tr>
    </thead>
    <tbody>
      <?php
$_from = $_smarty_tpl->tpl_vars['evento']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_ev_1_saved_item = isset($_smarty_tpl->tpl_vars['ev']) ? $_smarty_tpl->tpl_vars['ev'] : false;
$_smarty_tpl->tpl_vars['ev'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['ev']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['ev']->value) {
$_smarty_tpl->tpl_vars['ev']->_loop = true;
$__foreach_ev_1_saved_local_item = $_smarty_tpl->tpl_vars['ev'];
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['hora'];?>
hs</td>
        <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['fecha'];?>
</td>
        <td class="truncate" style="width: 90px"><?php echo $_smarty_tpl->tpl_vars['ev']->value['desc'];?>
</td>
      </tr>
      <?php
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_1_saved_local_item;
}
if ($__foreach_ev_1_saved_item) {
$_smarty_tpl->tpl_vars['ev'] = $__foreach_ev_1_saved_item;
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
