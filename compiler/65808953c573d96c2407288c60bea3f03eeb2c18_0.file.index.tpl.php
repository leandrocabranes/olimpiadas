<?php
/* Smarty version 3.1.29, created on 2016-07-26 04:17:46
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5796c84a729313_68824784',
  'file_dependency' => 
  array (
    '65808953c573d96c2407288c60bea3f03eeb2c18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\index.tpl',
      1 => 1469498873,
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
function content_5796c84a729313_68824784 ($_smarty_tpl) {
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
          <span class="card-title">Usuarios</span>
          <p>Administrar el estado de cuenta de los demás usuarios, siendo posible
            la deshabilitación de cuentas en caso de que sea necesario.</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=users">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Foro</span>
          <p>Administrar los posts del foro, en caso de que un post no esté de
          acuerdo con los acuerdos de la página</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=foro">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Contenido</span>
          <p>Cambiar el contenido del inicio, las noticias, el calendario y otra información de la página</p>
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
