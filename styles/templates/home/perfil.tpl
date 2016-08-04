<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col m8 s12 right-align">
      <h1>{$perfil.username}</h1>
      <p>{$perfil.correo}</p>
      <p>{$perfil.fecha_nacimiento}</p>
    </div>
    <div class="col m4">
      <img class="responsive-img circle" src="styles/img/{$perfil.avatar}.jpg">
    </div>
  </div>
</div>

{include 'main/footer.tpl'}

</body>
</html>
