<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h3>Problemas matemáticos</h3>
    </div>
  </div>
</div>
<div class="container">
<table class="responsive-table">
  <thead>
    <tr>
      <th data-field="titulo">Titulo</th>
      <th data-field="fecha">Fecha</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$problemas item=pr}
    <tr>
      <td><a href="?view=problemas&problema={$pr.id}">{$pr.titulo}</a></td>
      <td>{$pr.fecha}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
</div>
{if isset($smarty.session.username) && $smarty.session.permisos eq 3}
<div class="fixed-action-btn">
  <a href="?view=postear&postear=problema" class="btn-floating btn-large green accent-3">
    <i class="large material-icons">add</i>
  </a>
</div>
{/if}
{include 'main/footer.tpl'}

</body>
</html>
