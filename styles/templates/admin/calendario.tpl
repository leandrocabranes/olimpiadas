<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h2>Calendario:</h2>
    </div>
  </div>
  <table class="striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Autor</th>
        <th>Fecha del evento</th>
        <th>Lugar</th>
        <th>Descripción</th>
        <th>Fecha de modificación</th>
      </tr>
    </thead>
    <tbody>
      {foreach from=$calendario item=ev}
      <tr>
        <td><a href="?view=admin&admin=contenido&contenido=calendario&calendario={$ev.id}">{$ev.id}</a></td>
        <td>{$ev.autor}</td>
        <td>{$ev.fecha_e}</td>
        <td>{$ev.lugar}</td>
        <td style="width: 300px" class="truncate">{$ev.desc}</td>
        <td>{$ev.fecha_c}</td>
      </tr>
      {/foreach}
    </tbody>
  </table>
</div>
<div class="fixed-action-btn">
  <a href="?view=postear&postear=evento" class="btn-floating btn-large green accent-3">
    <i class="large material-icons">add</i>
  </a>
</div>
{include 'main/footer.tpl'}

</body>
</html>
