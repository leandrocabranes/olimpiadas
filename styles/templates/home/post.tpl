<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>{$post.titulo}</h1>
      <small>{$post.fecha}</small>
      <p class="right-align">{$post.autor}</p>
    </div>
  </div>
  <div class="video-container">
    <iframe width="853" height="480" src="{$post.video}" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="row">
    <div class="col s12">
      <p>{$post.contenido}</p>
    </div>
    <div class="col s12">
      <h4>Puntos: {$post.puntos}</h4>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h3>Comentarios:</h3>
    </div>
  </div>
  {if isset($comment)}
  {foreach from=$comment item=comm}
  <div class="row">
    <div class="col s12">{$comm.autor}:</div>
    <div class="col s12">
      <p>{$comm.contenido}</p>
    </div>
  </div>
  {/foreach}
  {/if}
</div>

{if isset($smarty.session.username)}
<div class="container">
  <div class="col s12">
    <div class="row">
      <div class="col s12">
        <center>
          <div id="aviso"></div>
        </center>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <textarea id="comentario" class="materialize-textarea"></textarea>
        <label for="comentario">Comentar</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field">
        <div class="col s12">
          <button class="btn-large" id="enviar">Enviar</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <script>
      window.onload = function() {
        document.getElementById('enviar').onclick = function() {
          var connect, comentario, form, result;
          comentario = document.getElementById('comentario').value;

          if (comentario != '') {

            form = 'comentario=' + comentario;

            connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            connect.onreadystatechange = function() {
              if (connect.readyState == 4 && connect.status == 200) {
                // conexion exitosa
                if (parseInt(connect.responseText) == 1) {
                  // conexion exitosa
                  // redireccion
                  result = "<div class='chip green accent-4 white-text'>Conectado! Espere por favor...";
                  result += "<i class='material-icons'>close</i></div>";
                  document.getElementById('aviso').innerHTML = result;
                  location.href= '?view=foro&post={$smarty.get.post}';
                }
              } else if (connect.readyState != 4) {
                // procesando
                result = "<div class='chip amber white-text'>Procesando...";
                result += "<i class='material-icons'>close</i></div>";
                document.getElementById('aviso').innerHTML = result;
              }
            }
            connect.open('POST', '?view=foro&post={$smarty.get.post}', true);
            connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            connect.send(form);
          } else {
            // campos vacios
            result = "<div class='chip red white-text'>Error: el comentario está vacio";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
          }
        }
      }

    </script>

{/if}

{include 'main/footer.tpl'}

</body>
</html>
