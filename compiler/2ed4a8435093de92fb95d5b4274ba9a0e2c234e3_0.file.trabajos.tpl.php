<?php
/* Smarty version 3.1.29, created on 2016-06-28 20:04:55
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\home\trabajos.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5772bc475fbd62_81495824',
  'file_dependency' => 
  array (
    '2ed4a8435093de92fb95d5b4274ba9a0e2c234e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\home\\trabajos.tpl',
      1 => 1467137028,
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
function content_5772bc475fbd62_81495824 ($_smarty_tpl) {
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
    <div class="col s12">
      <h1>Trabajos</h1>
    </div>
  </div>
  <div class="row">
    <div class="col s12 m6">
      <div class="card-panel cyan">
        <span class="white-text">
          <h3>El sitio está bajo mantenimiento</h3>
          <p>Estamos trabajando para poder acercarte todo nuestro contenido</p>
        </span>
      </div>
    </div>
  </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
