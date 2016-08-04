<?php
/* Smarty version 3.1.29, created on 2016-07-08 20:15:38
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\home\perfil.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577fedca78b971_58914937',
  'file_dependency' => 
  array (
    '9f15af39f0f62fd4bdf447d79d7c4422003a578a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\home\\perfil.tpl',
      1 => 1468001736,
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
function content_577fedca78b971_58914937 ($_smarty_tpl) {
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
