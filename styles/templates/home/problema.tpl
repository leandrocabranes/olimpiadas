<!DOCTYPE html>
<html lang="es">
{include 'main/head.tpl'}
<body>

{include 'main/header.tpl'}

<div class="container">
  <div class="row">
    <div class="col s12">
      <h1>{$problema.titulo}</h1>
      <small>{$problema.fecha}</small>
    </div>
  </div>
  <!-- <div class="video-container">
    <iframe width="853" height="480" src="{$post.video}" frameborder="0" allowfullscreen></iframe>
  </div> -->
  <div class="row">
    <div class="col s12">
      <h2>Enunciado:</h2><br>
      <p>{$problema.cont}</p>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <h3>Respuesta:</h3><button class="btn" id="ver">Ver respuesta</button><br>
      <div id="resultado" class="oculto">{$problema.resp}</div>
    </div>
  </div>
</div>
<div class="divider"></div>
<div class="container">
  <div class="row">
    <div class="col s12">
      <h4>Respuestas de usuarios:</h4>
    </div>
  </div>
  {if isset($resp)}
  {foreach from=$resp item=rsp}
  <div class="divider"></div>
  <div class="row">
    <div class="col s12">
      <small>{$rsp.fecha}</small><br>
      {$rsp.autor}:
    </div>
    <div class="col s12">
      <p>{$rsp.comentario}</p>
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
              location.href= '?view=problemas&problema={$smarty.get.problema}';
            }
          } else if (connect.readyState != 4) {
            // procesando
            result = "<div class='chip amber white-text'>Procesando...";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
          }
        }
        connect.open('POST', '?view=problemas&problema={$smarty.get.problema}', true);
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

<script>
$(function(){
  $('#ver').click(function (){
    $('#resultado').toggleClass('oculto');
    if ($('#ver').text() == 'Ver respuesta') {
      $('#ver').text('Ocultar respuesta');
    } else {
      $('#ver').text('Ver respuesta');
    }
  });
});
</script>

</body>
</html>
