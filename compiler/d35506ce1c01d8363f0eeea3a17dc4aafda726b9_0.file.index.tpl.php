<?php
/* Smarty version 3.1.29, created on 2016-08-22 15:33:10
  from "D:\Programas\XAMPP\htdocs\olimpiadas\styles\templates\admin\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57bb456616d994_99736374',
  'file_dependency' => 
  array (
    'd35506ce1c01d8363f0eeea3a17dc4aafda726b9' => 
    array (
      0 => 'D:\\Programas\\XAMPP\\htdocs\\olimpiadas\\styles\\templates\\admin\\index.tpl',
      1 => 1470326790,
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
function content_57bb456616d994_99736374 ($_smarty_tpl) {
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
