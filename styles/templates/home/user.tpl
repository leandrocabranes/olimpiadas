<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col m8 s12 right-align">
      <h1>{$user.username}</h1>
      <small>{$user.correo}</small>
    </div>
    <div class="col m4">
      <img class="responsive-img circle" src="styles/img/{$user.avatar}.jpg">
    </div>
  </div>
</div>

{include 'main/footer.tpl'}

</body>
</html>
