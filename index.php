<?php
date_default_timezone_set("America/Buenos_Aires");
session_start();

$view = isset($_GET['view']) ? $_GET['view'] : 'index';
require('core/libs/smarty/Smarty.class.php');
require('core/models/class.Conexion.php');
include('core/libs/class.Parsedown.php');

if (file_exists('core/controllers/' . $view . 'Controller.php')) {

  include('core/controllers/' . $view . 'Controller.php');

} else {
  // pagina de error
  include('core/controllers/errorController.php');
}
