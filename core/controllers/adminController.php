<?php
if ($_SESSION['permisos'] < 3) {
  header('Location: ?view=index');
}
$template = new Smarty();
if (empty($_GET['admin'])) {
  $template->display('admin/index.tpl');
} else if ($_GET['admin'] == 'users') {

  // Pagina de administración de usuarios

  if (empty($_GET['user'])) {
    // Mostramos todos los usuarios en la relacion 'usuarios'
    $db = new Conexion();
    $conexion = $db->conectar();
    $seleccion_users = $db->mostrar_users($conexion);
    foreach ($seleccion_users as $value) {
      $users[] = array(
        'id' => $value['id'],
        'username' => $value['username'],
        'correo' => $value['correo'],
        'fecha_nacimiento' => $value['fecha_nacimiento'],
        'avatar' => $value['avatar'],
        'permisos' => $value['permisos'],
        'activo' => $value['activo']
      );
    }
    $template->assign('users', $users);
    $template->display('admin/lista_users.tpl');
  } else {
    if ($_POST) {
      // Ejecutamos el cambio de estado de cuenta, de habilitado a deshabilitado
      include('core/models/class.Acceso.php');
      $acceso = new Acceso();
      $acceso->Estado($_GET['user']);
      exit;
    } else {
      // Mostramos el usuario seleccionado
      $db = new Conexion();
      $conexion = $db->conectar();
      $user_to_edit = $db->mostrar_unico_user($conexion, $_GET['user']);
      $user_info = array(
        'id' => $user_to_edit['id'],
        'username' => $user_to_edit['username'],
        'correo' => $user_to_edit['correo'],
        'fecha_nacimiento' => $user_to_edit['fecha_nacimiento'],
        'avatar' => $user_to_edit['avatar'],
        'permisos' => $user_to_edit['permisos'],
        'activo' => $user_to_edit['activo']
      );
      $template->assign('user_info', $user_info);
      $template->display('admin/user.tpl');
    }
  }
} else if ($_GET['admin'] == 'posts') {

  // Pagina de administración del foro

  $template->display('admin/posts.tpl');
} else if ($_GET['admin'] == 'contenido') {
  if ($_GET['contenido'] == 'noticias') {
    if (!empty($_GET['noticia'])) {
      $db = new Conexion();
      $conexion = $db->conectar();
      $noticia = $db->unica_noticia($conexion, $_GET['noticia']);
      $template->assign('noticia', $noticia);
      $template->display('admin/noticia.tpl');
    } else {
      $db = new Conexion();
      $conexion = $db->conectar();
      $seleccion_noticias = $db->mostrar_noticias($conexion);
      foreach ($seleccion_noticias as $value) {
        $noticias[] = array(
          'id' => $value['id'],
          'autor' => $value['autor_id'],
          'titulo' => $value['titulo'],
          'contenido' => $value['contenido'],
          'fecha' => $value['fecha_creacion']
        );
      }
      $template->assign('noticias', $noticias);
      $template->display('admin/lista_noticias.tpl');
    }
  } else if($_GET['contenido'] == 'calendario'){
    if (!empty($_GET['calendario'])) {
      $db = new Conexion();
      $conexion = $db->conectar();
      $seleccion_evento = $db->unico_evento($conexion, $_GET['calendario']);
      $user = $db->id_username($conexion, $seleccion_evento['autor_id']);
      $evento = array(
        'id' => $seleccion_evento['id'],
        'fecha_e' => $seleccion_evento['fecha_evento'],
        'lugar' => $seleccion_evento['lugar'],
        'desc' => $seleccion_evento['descripcion'],
        'autor' => $user['username'],
        'fecha_c' => $seleccion_evento['fecha_creacion']
      );
      $template->assign('evento', $evento);
      $template->display('admin/evento.tpl');
    } else {
      $db = new Conexion();
      $conexion = $db->conectar();
      $seleccion_calendario = $db->mostrar_calendario($conexion);

      foreach ($seleccion_calendario as $value) {
        $user = $db->id_username($conexion, $value['autor_id']);
        $eventos[] = array(
          'id' => $value['id'],
          'fecha_e' => $value['fecha_evento'],
          'lugar' => $value['lugar'],
          'desc' => $value['descripcion'],
          'autor' => $user['username'],
          'fecha_c' => $value['fecha_creacion']
        );
      }
      $template->assign('calendario', $eventos);
      $template->display('admin/calendario.tpl');
    }
  } else {
    # code...
    $template->display('admin/contenido.tpl');
  }
} else {
  $template->display('admin/index.tpl');
}
