<ul id="dropdown1" class="dropdown-content">
  <li><a href="?view=perfil">Perfil</a></li>
  <li><a href="?view=postear">Crear post</a></li>
  {if $smarty.session.permisos eq 3}<li><a href="?view=admin">Administrar página</a></li>{/if}
  <li><a href="?view=logout">Cerrar sesión</a></li>
</ul>
<ul id="dropdown2" class="dropdown-content">
  <li><a href="?view=perfil">Perfil</a></li>
  <li><a href="?view=postear">Crear post</a></li>
  {if $smarty.session.permisos eq 3}<li><a href="?view=admin">Administrar página</a></li>{/if}
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
        {if isset($smarty.session.username)}
        <li><a href="#" class="dropdown-button" data-activates="dropdown1">{$smarty.session.username}<i class="material-icons right">arrow_drop_down</i></a></li>
        {else}
        <li><a href="?view=login">Iniciar sesión</a></li>
        <li><a href="?view=signup">Crear cuenta</a></li>
        {/if}
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="?view=index">Inicio</a></li>
        <li><a href="?view=participar">¿Cómo participar?</a></li>
        <li><a href="?view=informacion">Infromación para padres</a></li>
        <li><a href="?view=formularios">Formularios</a></li>
        <li><a href="?view=problemas">Problemas y ejercicios</a></li>
        <li><a href="?view=foro">Foro</a></li>
        <li class="divider"></li>
        {if isset($smarty.session.username)}
        <li><a href="#" class="dropdown-button blue-text" data-activates="dropdown2">{$smarty.session.username}<i class="material-icons right">arrow_drop_down</i></a></li>
        {else}
        <li><a href="?view=login" class="blue-text">Iniciar sesión</a></li>
        <li><a href="?view=signup" class="blue-text">Crear cuenta</a></li>
        {/if}
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
