<?php
$template = new Smarty();

if (isset($_GET['post'])) {
  if ($_POST) {
    include('core/models/class.Acceso.php');
    $acceso = new Acceso();
    $acceso->Comentar($_GET['post']);
    exit;
  } else {
    $db = new Conexion();
    $conexion = $db->conectar();
    $seleccion_post = $db->ver_post($conexion, $_GET['post']);
    if (empty($seleccion_post)) {
      header('Location: ?view=error');
    } else {
      $fecha = str_split($seleccion_post['fecha'], 10);
      $autor = $db->id_username($conexion, $seleccion_post['autor']);
      $post = array(
        'titulo' => $seleccion_post['titulo'],
        'id_autor' => $seleccion_post['autor'],
        'autor' => $autor['username'],
        'contenido' => $seleccion_post['contenido'],
        'fecha' => $fecha[0],
        'puntos' => $seleccion_post['puntos'],
        'video' => $seleccion_post['video']
      );
      $comentarios = $db->id_comentarios($conexion, $seleccion_post['id']);
      if (!empty($comentarios)) {
        foreach ($comentarios as $value) {
          $autor = $db->id_username($conexion, $value['autor_id']);
          $comment[] = array(
            'autor' => $autor['username'],
            'contenido' => $value['contenido']
          );
        }
        $template->assign('comment', $comment);
      }

      $template->assign('post', $post);
      $template->display('home/post.tpl');
    }
  }
} else {
  $db = new Conexion();
  $conexion = $db->conectar();
  $seleccion = $db->mostrar_posts($conexion);

  foreach ($seleccion as $value) {
    $autor = $db->id_username($conexion, $value['autor']);
    $fecha = str_split($value['fecha'], 10);
    $posts[] = array(
      'id' => $value['id'],
      'titulo' => $value['titulo'],
      'id_autor' => $value['autor'],
      'autor' => $autor['username'],
      'contenido' => $value['contenido'],
      'fecha' => $fecha[0],
      'puntos' => $value['puntos']
    );
  }
  $template->assign('posts', $posts);
  $template->display('home/foro_posts.tpl');
}
