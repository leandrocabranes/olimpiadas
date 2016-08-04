<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h2>Cronograma</h2>
      <a href="?view=calendario">Ver más</a>
    </div>
  </div>
  {foreach from=$evento item=ev}
  <div class="row light-blue lighten-3 hide-on-small-only evento">
    <div class="col m2">
      <h1 class="white-text hora-med">{$ev.hora}hs</h1>
    </div>
    <div class="col m3 fecha-med">
      <h1 class="white-text">{$ev.fecha}</h1>
    </div>
    <div class="col m7 descripcion-med"><br>
      <span class="white-text">{$ev.desc}</span>
    </div>
  </div>
  {/foreach}
  <table class="responsive-table striped hide-on-med-and-up">
    <thead>
      <tr>
        <th>Hora</th>
        <th>Fecha</th>
        <th>Descripcion</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$evento item=ev}
      <tr>
        <td>{$ev.hora}hs</td>
        <td>{$ev.fecha}</td>
        <td class="truncate" style="width: 90px">{$ev.desc}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>

{include 'main/footer.tpl'}

</body>
</html>
