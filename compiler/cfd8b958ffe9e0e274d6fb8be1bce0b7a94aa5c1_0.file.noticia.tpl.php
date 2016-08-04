<?php
/* Smarty version 3.1.29, created on 2016-07-21 04:08:58
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\home\noticia.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57902eba3d9558_06851023',
  'file_dependency' => 
  array (
    'cfd8b958ffe9e0e274d6fb8be1bce0b7a94aa5c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\home\\noticia.tpl',
      1 => 1469066936,
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
function content_57902eba3d9558_06851023 ($_smarty_tpl) {
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
      <h1 class="center-align"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</h1>
    </div>
    <div class="col s12">
      <p class="right-align"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['fecha'];?>
</p>
    </div>
    <div class="col s12">
      <img src="styles/img/noticias/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
.jpg" class="responsive-img">
    </div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</p>
    </div>
  </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
