<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h2>Cronograma</h2>
    </div>
  </div>
  <div class="row evento">
    {foreach from=$evento item=ev}
    <div class="card col m8 s12">
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Lugar: {$ev.lugar}
          <i class="material-icons right">more_vert</i><br>
          Hora: {$ev.hora}hs<br>
          Fecha: {$ev.fecha}</span>
        <p><a style="cursor: pointer" class="activator">Ver más</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Lugar: {$ev.lugar}
          <i class="material-icons right">close</i><br>
          Hora: {$ev.hora}hs<br>
          Fecha: {$ev.fecha}</span>
        <p>{$ev.desc}</p>
      </div>
    </div>
    {/foreach}
  </div>
</div>

{include 'main/footer.tpl'}

</body>
</html>
