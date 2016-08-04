<?php
/* Smarty version 3.1.29, created on 2016-07-26 04:17:50
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\contenido.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5796c84ed65631_51279794',
  'file_dependency' => 
  array (
    'a4950037911058ecfff65a7ee2cbfe46a93447df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\contenido.tpl',
      1 => 1469498866,
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
function content_5796c84ed65631_51279794 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <h1 class="center-align">Administración</h1>
  <div class="row">
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Noticias</span>
          <p>Adminisrtar el contenido de las noticias.</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=contenido&contenido=noticias">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Calendario</span>
          <p>Administrar el cronograma de la página.</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=contenido&contenido=calendario">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Contenido de las páginas</span>
          <p>Administrar la información básica brindada por el sitio</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=contenido">Administrar</a>
        </div>
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
