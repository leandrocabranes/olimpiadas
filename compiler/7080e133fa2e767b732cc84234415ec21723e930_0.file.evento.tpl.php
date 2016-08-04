<?php
/* Smarty version 3.1.29, created on 2016-07-26 04:49:28
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\evento.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5796cfb8ac1b94_47704856',
  'file_dependency' => 
  array (
    '7080e133fa2e767b732cc84234415ec21723e930' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\evento.tpl',
      1 => 1469501367,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/head.tpl' => 1,
    'file:main/header.tpl' => 1,
    'file:main/footer.tpl' => 1,
  ),
),false)) {
function content_5796cfb8ac1b94_47704856 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="row">
    <div class="col s12">
      <h2>Evento a editar:</h2>
    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <center>
        <div id="aviso"></div>
      </center>
    </div>
  </div>
  <div class="row">
    <div class="col s12"><strong>ID</strong></div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['evento']->value['id'];?>
</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Autor</strong></div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['evento']->value['autor'];?>
</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Fecha del evento</strong></div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha_e'];?>
</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Lugar</strong></div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['evento']->value['lugar'];?>
</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Descripción</strong></div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['evento']->value['desc'];?>
</p>
    </div>
  </div>
  <div class="divider"></div>
  <div class="row">
    <div class="col s12"><strong>Fecha de última modificación</strong></div>
    <div class="col s12">
      <p><?php echo $_smarty_tpl->tpl_vars['evento']->value['fecha_c'];?>
</p>
    </div>
  </div>
  <div class="divider"></div>
</div>

<!-- <?php echo '<script'; ?>
>
window.onload = function() {
  document.getElementById('enviar').onclick = function() {
    var connect, activo, form, result;
    activo = document.getElementById('activo').value;
    if (activo != '') {

      form = 'activo=' + activo;
      console.log(form);

      connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
      connect.onreadystatechange = function() {
        console.log("se creo la conexion")
        if (connect.readyState == 4 && connect.status == 200) {
          // conexion exitosa
          console.log("Se procesa la conexion")
          if (parseInt(connect.responseText) == 1) {
            // conexion exitosa
            // redireccion
            result = "<div class='chip green accent-4 white-text'>Conectado! Espere por favor...";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
            location.href= '?view=admin&admin=users&user=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
';
          } else if (parseInt(connect.responseText) == 2) {
            // error, datos incorrectos
            console.log("ocurrio un error en la conexion a la db; pero entro")
            result = "<div class='chip blue accent-3 white-text'>Ha ocurrido un error";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
            console.log(connect.responseText);
          } else {
            // error, datos incorrectos
            console.log("ocurrio un error en la conexion a la db")
            result = "<div class='chip red accent-3 white-text'>Ha ocurrido un error";
            result += "<i class='material-icons'>close</i></div>";
            document.getElementById('aviso').innerHTML = result;
            console.log(connect.responseText);
          }
        } else if (connect.readyState != 4) {
          // procesando
          result = "<div class='chip amber white-text'>Procesando...";
          result += "<i class='material-icons'>close</i></div>";
          document.getElementById('aviso').innerHTML = result;
        }
      }
      connect.open('POST', '?view=admin&admin=users&user=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
', true);
      connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      connect.send(form);
    } else {
      // campos vacios
      result = "<div class='chip red white-text'>Error: el usuario y/o nombre estan vacios";
      result += "<i class='material-icons'>close</i></div>";
      document.getElementById('aviso').innerHTML = result;
    }
  }
}
<?php echo '</script'; ?>
> -->

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
