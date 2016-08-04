<?php

if (isset($_SESSION['username'])) {
  $template = new Smarty();
  if (empty($_GET['user'])) {
    $db = new Conexion();
    $conexion = $db->conectar();
    $seleccion_user = $db->ver_user($conexion, $_SESSION['id']);
    $perfil =  array(
      'username' => $seleccion_user['username'],
      'correo' => $seleccion_user['correo'],
      'fecha_nacimiento' => $seleccion_user['fecha_nacimiento'],
      'avatar' => $seleccion_user['avatar']
    );
    $template->assign('perfil', $perfil);
    $template->display('home/perfil.tpl');
  } else {
    $db = new Conexion();
    $conexion = $db->conectar();
    $seleccion_user = $db->ver_user($conexion, $_GET['user']);
    $user = array(
      'username' => $seleccion_user['username'],
      'correo' => $seleccion_user['correo'],
      'fecha_nacimiento' => $seleccion_user['fecha_nacimiento'],
      'avatar' => $seleccion_user['avatar']
    );
    $template->assign('user', $user);
    $template->display('home/user.tpl');
  }
} else {
  header('Location: ?view=login');
}
