<?php
$template = new Smarty();
if (isset($_GET['problema'])) {
  if ($_POST) {
    include('core/models/class.Acceso.php');
    $acceso = new Acceso();
    $acceso->ComentarRespuesta($_GET['problema']);
    exit;
  } else {
    $db = new Conexion();
    $conexion = $db->conectar();
    $seleccion_problema = $db->ver_problema($conexion, $_GET['problema']);
    if (empty($seleccion_problema)) {
      header('Location: ?view=error');
    } else {
      $fecha = str_split($seleccion_problema['fecha_creado'], 10);
      $problema = array(
        'titulo' => $seleccion_problema['titulo'],
        'fecha' => $fecha[0],
        'cont' => $seleccion_problema['contenido'],
        'resp' => $seleccion_problema['respuesta'],
        'imagen' => $seleccion_problema['video']
      );
      $respuestas = $db->id_respuestas($conexion, $seleccion_problema['id']);
      if (!empty($respuestas)) {
        foreach ($respuestas as $value) {
          $autor = $db->id_username($conexion, $value['autor_id']);
          $fecha = str_split($seleccion_problema['fecha_creado'], 10);
          $respuesta[] = array(
            'autor' => $autor['username'],
            'comentario' => $value['comentario'],
            'fecha' => $fecha[0]
          );
        }
        $template->assign('resp', $respuesta);
      }
      $template->assign('problema', $problema);
      $template->display('home/problema.tpl');
    }
  }
} else {
  $db = new Conexion();
  $conexion = $db->conectar();

  $seleccion = $db->mostrar_problemas($conexion);
  foreach ($seleccion as $value) {
    $autor = $db->id_username($conexion, $value['autor_id']);
    $fecha = str_split($value['fecha_creado'], 10);
    $problemas[] = array(
      'id' => $value['id'],
      'titulo' => $value['titulo'],
      'fecha' => $fecha[0],
    );
  }
  $template->assign('problemas', $problemas);
  $template->display('home/foro_problemas.tpl');
}
