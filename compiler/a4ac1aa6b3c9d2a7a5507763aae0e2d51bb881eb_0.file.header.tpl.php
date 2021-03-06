<?php
/* Smarty version 3.1.29, created on 2016-07-28 22:16:08
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\main\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_579a6808216e21_97460452',
  'file_dependency' => 
  array (
    'a4ac1aa6b3c9d2a7a5507763aae0e2d51bb881eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\main\\header.tpl',
      1 => 1469736964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_579a6808216e21_97460452 ($_smarty_tpl) {
?>
<ul id="dropdown1" class="dropdown-content">
  <li><a href="?view=perfil">Perfil</a></li>
  <li><a href="?view=postear">Crear post</a></li>
  <?php if ($_SESSION['permisos'] == 3) {?><li><a href="?view=admin">Administrar página</a></li><?php }?>
  <li><a href="?view=logout">Cerrar sesión</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="?view=perfil">Perfil</a></li>
  <li><a href="?view=postear">Crear post</a></li>
  <?php if ($_SESSION['permisos'] == 3) {?><li><a href="?view=admin">Administrar página</a></li><?php }?>
  <li><a href="?view=logout">Cerrar sesión</a></li>
</ul>
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper cyan">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="left hide-on-med-and-down">
        <li><a href="?view=index">Inicio</a></li>
        <li><a href="?view=participar">¿Cómo participar?</a></li>
        <li><a href="?view=informacion">Información para padres</a></li>
        <li><a href="?view=formularios">Formularios</a></li>
        <li><a href="?view=problemas">Problemas y ejercicios</a></li>
        <li><a href="?view=foro">Foro</a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <?php if (isset($_SESSION['username'])) {?>
        <li><a href="#" class="dropdown-button" data-activates="dropdown1"><?php echo $_SESSION['username'];?>
<i class="material-icons right">arrow_drop_down</i></a></li>
        <?php } else { ?>
        <li><a href="?view=login">Iniciar sesión</a></li>
        <li><a href="?view=signup">Crear cuenta</a></li>
        <?php }?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="?view=index">Inicio</a></li>
        <li><a href="?view=participar">¿Cómo participar?</a></li>
        <li><a href="?view=informacion">Infromación para padres</a></li>
        <li><a href="?view=formularios">Formularios</a></li>
        <li><a href="?view=problemas">Problemas y ejercicios</a></li>
        <li><a href="?view=foro">Foro</a></li>
        <li class="divider"></li>
        <?php if (isset($_SESSION['username'])) {?>
        <li><a href="#" class="dropdown-button blue-text" data-activates="dropdown2"><?php echo $_SESSION['username'];?>
<i class="material-icons right">arrow_drop_down</i></a></li>
        <?php } else { ?>
        <li><a href="?view=login" class="blue-text">Iniciar sesión</a></li>
        <li><a href="?view=signup" class="blue-text">Crear cuenta</a></li>
        <?php }?>
      </ul>
    </div>
  </nav>
</div>
<header class="light-blue lighten-4">
  <div class="row">
    <div class="col s12">
      <h1 class="center-align">Ñandú</h1>
    </div>
    <div class="col s12">
      <h4 class="center-align">Necochea</h4>
    </div>
  </div>
</header>
<?php }
}
