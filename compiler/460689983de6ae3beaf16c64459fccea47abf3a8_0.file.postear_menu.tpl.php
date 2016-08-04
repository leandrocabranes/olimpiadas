<?php
/* Smarty version 3.1.29, created on 2016-08-02 01:48:45
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\home\postear_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579fdfdd45d4f3_11415541',
  'file_dependency' => 
  array (
    '460689983de6ae3beaf16c64459fccea47abf3a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\home\\postear_menu.tpl',
      1 => 1470095324,
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
function content_579fdfdd45d4f3_11415541 ($_smarty_tpl) {
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
      <h1>Información</h1>
    </div>
  </div>
  <div class="row">
    <?php if ($_SESSION['permisos'] > 2) {?>
    <div class="col s12 m6">
      <div class="card-panel white">
        <span class="grey-text text-darken-3">
          <h3>Crear evento</h3>
          <p>El evento se verá en la página de inicio y en el calendario</p>
          <a href="?view=postear&postear=evento">Crear</a>
        </span>
      </div>
    </div>
    <div class="col s12 m6">
      <div class="card-panel white">
        <span class="grey-text text-darken-3">
          <h3>Crear problema</h3>
          <p>El problema estará disponible para que los usuarios pueda leerlo
          ver el video (en caso de tenerlo) y dar sus respuestas y método de resolución.</p>
          <a href="?view=postear&postear=problema">Crear</a>
        </span>
      </div>
    </div>
    <?php }?>
  </div>
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
