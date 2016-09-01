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

$(function () {
  var aviso = $('#aviso'), result = "";
  $('#enviar').on('click'. function () {
    result = "<div class='chip amber white-text'>Procesando...";
    result += "<i class='material-icons'>close</i></div>";
    aviso.html(result);

    var comentario, form;
    comentario = $('#comentario').val();
    if (comentario != '') {
      form = 'comentario=' + comentario;
      $.ajax({
        url: '?view=foro&post={$smarty.get.post}',
        method: 'POST',
        dataType: 'text',
        data: form,
        success: function (xhr) {
          if (xhr == 1) {
            result = "<div class='chip green accent-4 white-text'>Conectado! Espere por favor...";
            result += "<i class='material-icons'>close</i></div>";
            aviso.html(result);
            setTimeout(function(){
              location.href = 'index.php';}, 500);
          }
        },
        error: function () {
          result = "<div class='chip red accent-3 white-text'>¡Ha ocurrido un error!";
          result += "<i class='material-icons'>close</i></div>";
          aviso.html(result);
          console.error(xhr, status, err.toString());
        }
      });
    } else {
      result = "<div class='chip indigo accent-3 white-text'>No deje ningún campo vacio";
      result += "<i class='material-icons'>close</i></div>";
      aviso.html(result);
    }
  })
});
</script>

{/if}

{include 'main/footer.tpl'}

</body>
</html>
