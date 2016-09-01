<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>Foro piola</h1>
    </div>
  </div>
</div>
<div class="container">

<table class="responsive-table">
  <thead>
    <tr>
      <th data-field="titulo">Titulo</th>
      <th data-field="contenido">Contenido</th>
      <th data-field="autor">Autor</th>
      <th data-field="fecha">Fecha</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$posts item=pt}
    <tr>
      <td><a href="?view=foro&post={$pt.id}">{$pt.titulo}</a></td>
      <td style="width: 300px" class="truncate">{$pt.contenido}</td>
      <td><a href="?view=perfil&user={$pt.id_autor}">{$pt.autor}</a></td>
      <td>{$pt.fecha}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
</div>
{if isset($smarty.session.username)}
<div class="fixed-action-btn">
  <a href="?view=postear&postear=post" class="btn-floating btn-large green accent-3">
    <i class="large material-icons">add</i>
  </a>
</div>
{/if}
{include 'main/footer.tpl'}

</body>
</html>
