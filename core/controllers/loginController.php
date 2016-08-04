<?php
if (isset($_SESSION['username'])) {
  header('Location: ?view=index');
}

if ($_POST) {
  include('core/models/class.Acceso.php');
  $acceso = new Acceso();
  $acceso->Login();
  exit;
} else {
  $template = new Smarty();
  $template->display('public/login.tpl');
}
