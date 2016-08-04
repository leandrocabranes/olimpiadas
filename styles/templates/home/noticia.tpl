<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1 class="center-align">{$noticia.titulo}</h1>
    </div>
    <div class="col s12">
      <p class="right-align">{$noticia.fecha}</p>
    </div>
    <div class="col s12">
      <img src="styles/img/noticias/{$noticia.imagen}.jpg" class="responsive-img">
    </div>
    <div class="col s12">
      <p>{$noticia.contenido}</p>
    </div>
  </div>
</div>
{include 'main/footer.tpl'}

</body>
</html>
