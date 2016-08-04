<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <h1 class="center-align">Administración</h1>
  <div class="row">
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Usuarios</span>
          <p>Administrar el estado de cuenta de los demás usuarios, siendo posible
            la deshabilitación de cuentas en caso de que sea necesario.</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=users">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Foro</span>
          <p>Administrar los posts del foro, en caso de que un post no esté de
          acuerdo con los acuerdos de la página</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=foro">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Contenido</span>
          <p>Cambiar el contenido del inicio, las noticias, el calendario y otra información de la página</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=contenido">Administrar</a>
        </div>
      </div>
    </div>
  </div>
</div>

{include 'main/footer.tpl'}

</body>
</html>
