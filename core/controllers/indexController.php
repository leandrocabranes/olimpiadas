<?php

$template = new Smarty();

$db = new Conexion();
$conexion = $db->conectar();
$seleccion_calendario = $db->mostrar_calendario($conexion);
$largo = count($seleccion_calendario);
if ($largo < 3) {
  for ($i=0; $i < $largo; $i++) {
    $fecha = str_split($seleccion_calendario[$i]['fecha_evento'], 5);
    $fecha = str_replace('-', '/', $fecha[1]);
    $fecha = ltrim($fecha, '0');
    $hora = str_split($seleccion_calendario[$i]['hora_evento'], 2);
    $hora = ltrim($hora[0], '0');
    $evento[] = array(
      'hora' => $hora,
      'fecha' => $fecha,
      'lugar' => $seleccion_calendario[$i]['lugar'],
      'desc' => $seleccion_calendario[$i]['descripcion']
    );
  }
} else {
  for ($i=0; $i < 3; $i++) {
    $fecha = str_split($seleccion_calendario[$i]['fecha_evento'], 5);
    $fecha = str_replace('-', '/', $fecha[1]);
    $fecha = ltrim($fecha, '0');
    $hora = str_split($seleccion_calendario[$i]['hora_evento'], 2);
    $hora = ltrim($hora[0], '0');
    $evento[] = array(
      'hora' => $hora,
      'fecha' => $fecha,
      'lugar' => $seleccion_calendario[$i]['lugar'],
      'desc' => $seleccion_calendario[$i]['descripcion']
    );
  }
}

$template->assign('evento', $evento);
$template->display('home/index.tpl');
