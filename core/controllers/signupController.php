<?php

if (!isset($_SESSION['id'])) {
  if ($_POST) {
    include('core/models/class.Acceso.php');
    $acceso = new Acceso();
    $acceso->Signup();
    exit;
  } else {
    $template = new Smarty();
    $template->display('public/signup.tpl');
  }
} else {
  header('Location: ?view=perfil');
}
