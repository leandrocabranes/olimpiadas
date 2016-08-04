<?php
/* Smarty version 3.1.29, created on 2016-07-20 19:27:15
  from "C:\xampp\htdocs\raizimaginaria\styles\templates\admin\user.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578fb473647bd1_54393756',
  'file_dependency' => 
  array (
    '1886938f69714d273aa622db91cc0b994924aa8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\raizimaginaria\\styles\\templates\\admin\\user.tpl',
      1 => 1469035633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main/head.tpl' => 1,
    'file:main/header.tpl' => 1,
    'file:main/nav.tpl' => 1,
    'file:main/footer.tpl' => 1,
  ),
),false)) {
function content_578fb473647bd1_54393756 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="es">
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
  <div class="row">
    <div class="col s12">
      <center>
        <div id="aviso"></div>
      </center>
    </div>
  </div>
  <div class="row">
    <h3>Editar usuario: #<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
</h3>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Nombre de usuario:</strong> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>

    </div>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Correo:</strong> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['correo'];?>

    </div>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Fecha de Nacimiento:</strong> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['fecha_nacimiento'];?>

    </div>
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Avatar:</strong> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['avatar'];?>

    </div>
    <div class="col m1 s3 offset-m3">
      <img class="circle responsive-img" src="styles/img/<?php echo $_smarty_tpl->tpl_vars['user_info']->value['avatar'];?>
.jpg" alt="">
    </div>
  </div>
  <div class="row">
  </div>
  <div class="row">
    <div class="col m6 offset-m3">
      <strong>Nivel de permisos:</strong> <?php echo $_smarty_tpl->tpl_vars['user_info']->value['permisos'];?>

    </div>
  </div>
  <div class="row">
    <div class="input-field col m4 offset-m3">
      <select id="activo">
        <?php if ($_smarty_tpl->tpl_vars['user_info']->value['activo'] == "A") {?>
        <option value="A" selected>Habilitada</option>
        <option value="D">Deshabilitada</option>
        <?php } else { ?>
        <option value="A">Habilitada</option>
        <option value="D" selected>Deshabilitada</option>
        <?php }?>
      </select>
      <label>Estado de cuenta</label>
    </div>
  </div>
  <div class="row">
    <center>
      <button class="btn" id="enviar">Guardar</button>
    </center>
  </div>
</div>

<?php echo '<script'; ?>
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
>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
