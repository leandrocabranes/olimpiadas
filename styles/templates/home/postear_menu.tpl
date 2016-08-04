<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>Información</h1>
    </div>
  </div>
  <div class="row">
    {if $smarty.session.permisos gt 2}
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
    {/if}
  </div>
</div>

{include 'main/footer.tpl'}

</body>
</html>
