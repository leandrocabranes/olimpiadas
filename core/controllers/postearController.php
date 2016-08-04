<?php

if (isset($_SESSION['id'], $_SESSION['username'])) {
  if (empty($_GET['postear'])) {
    $template = new Smarty();
    $template->display('home/postear_menu.tpl');
  } else {
    if ($_GET['postear'] == 'post') {
      if ($_POST) {
        include('core/models/class.Acceso.php');
        $acceso = new Acceso();
        $acceso->PostearPost();
        exit;
      } else {
        $template = new Smarty();
        $template->display('home/postear_post.tpl');
      }
    } else if ($_GET['postear'] == 'evento') {
      if ($_SESSION['permisos'] == 3) {
        if ($_POST) {
          include('core/models/class.Acceso.php');
          $acceso = new Acceso();
          $acceso->PostearEvento();
          exit;
        } else {
          $template = new Smarty();
          $template->display('admin/postear_evento.tpl');
        }
      } else {
        header('Location: ?view=index');
      }
    } else if ($_GET['postear'] == 'problema') {
      if ($_SESSION['permisos'] == 3) {
        if ($_POST) {
          include('core/models/class.Acceso.php');
          $acceso = new Acceso();
          $acceso->PostearProblema();
          exit;
        } else {
          $template = new Smarty();
          $template->display('admin/postear_problema.tpl');
        }
      } else {
        header('Location: ?view=index');
      }
    }
  }
} else {
  header('Location: ?view=login');
}
