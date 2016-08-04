<?php

$template = new Smarty();

$db = new Conexion();
$conexion = $db->conectar();
$seleccion_calendario = $db->mostrar_calendario($conexion);
foreach ($seleccion_calendario as $value) {
  $fecha = str_split($value['fecha_evento'], 5);
  $fecha = str_replace('-', '/', $fecha[1]);
  $fecha = ltrim($fecha, '0');
  $hora = str_split($value['hora_evento'], 2);
  $hora = ltrim($hora[0], '0');
  $evento[] = array(
    'hora' => $hora,
    'fecha' => $fecha,
    'lugar' => $value['lugar'],
    'desc' => $value['descripcion']
  );
}
$template->assign('evento', $evento);
$template->display('home/calendario.tpl');
