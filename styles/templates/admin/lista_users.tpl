<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <h1 class="center-align">Usuarios</h1>
  <h5>administración</h5>
  <div class="row">
    <table class="bordered striped responsive-table">
      <thead>
        <tr>
          <th>Nombre de usuario</th>
          <th>Correo</th>
          <th>Fecha de nacimiento</th>
          <th>Avatar</th>
          <th>Permisos</th>
          <th>Estado de cuenta</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$users item=usr}
        <tr>
          <td>{$usr.username}</td>
          <td>{$usr.correo}</td>
          <td>{$usr.fecha_nacimiento}</td>
          <td>{$usr.avatar}</td>
          <td>{$usr.permisos}</td>
          {if $usr.activo eq "A"}
          <td>Activa</td>
          {else}
          <td>Deshabilitada</td>
          {/if}
          <td><a href="?view=admin&admin=users&user={$usr.id}" class="btn cyan accent-4">Editar</a></td>
        </tr>
        {/foreach}
      </tbody>
    </table>
  </div>
</div>

{include 'main/footer.tpl'}

</body>
</html>
