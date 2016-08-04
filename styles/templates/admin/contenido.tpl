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
          <span class="card-title">Noticias</span>
          <p>Adminisrtar el contenido de las noticias.</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=contenido&contenido=noticias">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Calendario</span>
          <p>Administrar el cronograma de la página.</p>
        </div>
        <div class="card-action">
          <a href="?view=admin&admin=contenido&contenido=calendario">Administrar</a>
        </div>
      </div>
    </div>
    <div class="col m4 s12">
      <div class="card">
        <div class="card-content grey-text text-darken-4">
          <span class="card-title">Contenido de las páginas</span>
          <p>Administrar la información básica brindada por el sitio</p>
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
