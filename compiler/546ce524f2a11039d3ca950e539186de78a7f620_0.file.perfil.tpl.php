<?php
/* Smarty version 3.1.29, created on 2016-08-04 14:34:55
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\home\perfil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a37cbfb674f6_07346747',
  'file_dependency' => 
  array (
    '546ce524f2a11039d3ca950e539186de78a7f620' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\home\\perfil.tpl',
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
function content_57a37cbfb674f6_07346747 ($_smarty_tpl) {
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
    <div class="col m8 s12 right-align">
      <h1><?php echo $_smarty_tpl->tpl_vars['perfil']->value['username'];?>
</h1>
      <p><?php echo $_smarty_tpl->tpl_vars['perfil']->value['correo'];?>
</p>
      <p><?php echo $_smarty_tpl->tpl_vars['perfil']->value['fecha_nacimiento'];?>
</p>
    </div>
    <div class="col m4">
      <img class="responsive-img circle" src="styles/img/<?php echo $_smarty_tpl->tpl_vars['perfil']->value['avatar'];?>
.jpg">
    </div>
  </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
