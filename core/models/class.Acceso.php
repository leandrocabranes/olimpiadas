<?php

class Acceso {

  public function Login () {
    try {
      if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $db = new Conexion();
        $conexion = $db->conectar();
        $db->asignarLogin($_POST['username'], $_POST['password']);
        $exito = $db->password_match($conexion);
        $activo = $db->activo_user($conexion);
        if ($exito == false) {
          throw new Exception(2);
        } else if($activo == "D") {
          throw new Exception(3);
        } else if ($activo == "A" && $exito == true) {
          $_SESSION['username'] = $_POST['username'];
          $_SESSION['id'] = $db->id_match($conexion);
          $_SESSION['permisos'] = $db->id_permisos($conexion);
          echo 1;
        } else {
          throw new Exception(2);
        }
      } else {
        throw new Exception('Error: formulario vacio');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function Recuperar () {

  }

  public function Signup () {
    try {
      if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['correo'])
      && !empty($_POST['dia']) && !empty($_POST['mes']) && !empty($_POST['anio']) && !empty($_POST['avatar'])) {
        if (strlen($_POST['username']) > 20 || strlen($_POST['username']) < 6 || strlen($_POST['password']) > 20 || strlen($_POST['password']) < 6) {
          throw new Exception(3);
        } else if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
          throw new Exception(3);
        }
        $db = new Conexion();
        $conexion = $db->conectar();
        $fecha_nacimiento = $_POST['anio'] . '-' . $_POST['mes'] . '-' . $_POST['dia'];
        $db->asignar_signup($_POST['username'], $_POST['password'], $_POST['correo'], $fecha_nacimiento, $_POST['avatar']);

        $exito = $db->id_match($conexion, $_POST['username']);
        if (!isset($exito)) {
          $db->crear_usuario($conexion);
          echo 1;
        } else {
          throw new Exception(2);
        }
      } else {
        throw new Exception('Error: formulario vacio');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function PostearPost () {
    try {
      if (!empty($_POST['titulo']) && !empty($_POST['contenido'])) {
        $db = new Conexion();
        $conexion = $db->conectar();
        $db->asignar_post($_POST['titulo'], $_POST['contenido'], $_POST['video']);

        $exito = $db->id_match_post($conexion);
        if (!isset($exito)) {
          $db->crear_post($conexion, $_SESSION['id']);
          echo 1;
        } else {
          throw new Exception(2);
        }
      } else {
        throw new Exception('Error: formulario vacio');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }

  }

  public function PostearEvento () {
    try {
      if (!empty($_POST['fecha_e']) && !empty($_POST['descripcion']) && !empty($_POST['lugar']) && !empty($_POST['hora']) && !empty($_POST['minuto'])) {
        $db = new Conexion();
        $conexion = $db->conectar();
        $hora_e = $_POST['hora'] . ':' . $_POST['minuto'];
        $db->asignar_evento($_POST['lugar'], $_POST['descripcion'], $_POST['fecha_e'], $hora_e);
        $db->crear_evento($conexion, $_SESSION['id']);
        echo 1;
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function PostearProblema () {
    try {
      if (!empty($_POST['titulo']) && !empty($_POST['contenido']) && !empty($_POST['respuesta'])) {
        $imagen = ($_POST['imagen'] == '' ? 'vacio' : $_POST['imagen']);
        $video = ($_POST['video'] == '' ? 'vacio' : $_POST['video']);
        $pd = new Parsedown();
        $contenido = $pd->text($_POST['contenido']);
        $respuesta = $pd->text($_POST['respuesta']);
        $DB = new Conexion();
        $connect = $DB->conectar();
        $DB->asignar_problema($_POST['titulo'], $contenido, $respuesta, $video, $imagen);
        $DB->crear_problema($connect, $_SESSION['id']);
        echo 1;
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function Comentar ($id_post) {
    try {
      if (!empty($_POST['comentario'])) {
        $db = new Conexion();
        $conexion = $db->conectar();
        $db->asignar_comentario($_POST['comentario']);
        $db->crear_comentario($conexion, $id_post, $_SESSION['id']);
        echo 1;
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function ComentarRespuesta ($id_problema) {
    try {
      if (!empty($_POST['comentario'])) {
        $pd = new Parsedown();
        $comentario = $pd->text($_POST['comentario']);
        $db = new Conexion();
        $conexion = $db->conectar();
        $db->asignar_respuesta($comentario);
        $db->crear_respuesta($conexion, $id_problema, $_SESSION['id']);
        echo 1;
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }

  }

  public function Estado ($id_user) {
    try {
      if (!empty($_POST['activo'])) {
        $bd = new Conexion();
        $conectar = $bd->conectar();
        // $bd->asignar_estado($_POST['estado']);
        $bd->cambiar_activo($conectar, $id_user, $_POST['activo']);
        echo 1;
      } else {
        throw new Exception(2);
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }

  }
}
