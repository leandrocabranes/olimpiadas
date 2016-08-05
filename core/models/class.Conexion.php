<?php

class Conexion {
  private $username;
  private $password;
  private $correo;
  private $avatar;
  private $fecha_nac;
  private $estado;
  private $titulo;
  private $titulo_problema;
  private $contenido;
  private $contenido_problema;
  private $respuesta;
  private $imagen;
  private $video;
  private $video_problema;
  private $comentario;
  private $lugar;
  private $descripcion;
  private $fecha_evento;
  private $hora;

  private $conn;

  public function conectar () {
    $this->conn = new PDO("mysql:host=localhost; dbname=raiz_imaginaria", "root", "");
    $this->conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
    return $this->conn;
  }

  public function asignarLogin ($user, $pass) {
    $user = $this->val_data($user);
    $pass = $this->val_data($pass);
    $this->username = $user;
    $this->password = $pass;
  }

  private function hashed_password ($user, $con) {
    $query = $con->prepare("SELECT password FROM usuarios WHERE username= :username");
    $query->bindParam(":username", $user);
    $query->execute();
    $hashed = $query->fetch(PDO::FETCH_ASSOC);
    return $hashed['password'];
  }

  public function password_match ($con) {
    $match = password_verify($this->password, $this->hashed_password($this->username, $con));
    return $match;
  }

  public function asignar_signup ($user, $pass, $mail, $fecha, $av) {
    $user = $this->val_data($user);
    $pass = $this->val_data($pass);
    $mail = $this->val_data($mail);
    $fecha = $this->val_data($fecha);
    $av = $this->val_data($av);
    $this->username = $user;
    $this->password = $pass;
    $this->correo = $mail;
    $this->fecha_nac = $fecha;
    $this->avatar = $av;
  }

  public function id_match ($con) {
    $query = $con->prepare("SELECT id FROM usuarios WHERE username= :username");
    $query->bindParam(":username", $this->username);
    $query->execute();
    $match = $query->fetch(PDO::FETCH_ASSOC);

    return $match['id'];
  }

  public function activo_user ($con) {
    $query = $con->prepare("SELECT activo FROM usuarios WHERE username= :username");
    $query->bindParam(":username", $this->username);
    $query->execute();
    $estado = $query->fetch();

    return $estado['activo'];
  }

  public function crear_usuario ($con) {
    $hash = password_hash($this->password, PASSWORD_DEFAULT);
    $query = $con->prepare("INSERT INTO usuarios (username, password, correo, fecha_nacimiento, avatar, permisos, activo)
    VALUES (:username, :password, :correo, :fecha_nacimiento, :avatar, 1, 'A')");
    $query->bindParam(":username", $this->username);
    $query->bindParam(":password", $hash);
    $query->bindParam(":correo", $this->correo);
    $query->bindParam(":fecha_nacimiento", $this->fecha_nac);
    $query->bindParam(":avatar", $this->avatar);

    $query->execute();
  }

  public function mostrar_posts ($con) {
    $query = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
    $query->execute();

    $match = $query->fetchAll();
    return $match;
  }

  public function ver_post ($con, $id_post) {
    $query = $con->prepare("SELECT * FROM posts WHERE id= :id");
    $query->bindParam(':id', $id_post);
    $query->execute();

    $match = $query->fetch();
    return $match;
  }

  public function id_username ($con, $id_user) {
    $query = $con->prepare("SELECT username FROM usuarios WHERE id= :id");
    $query->bindParam(':id', $id_user);
    $query->execute();

    $match = $query->fetch();
    return $match;
  }

  public function ver_user ($con, $id_user) {
    $query = $con->prepare("SELECT username, correo, fecha_nacimiento, avatar FROM usuarios
    WHERE id= :id");
    $query->bindParam(':id', $id_user);
    $query->execute();

    $match = $query->fetch();
    return $match;
  }

  public function asignar_post ($tit, $cont, $vid) {
    $tit = $this->val_data($tit);
    $this->titulo = $tit;
    $cont = $this->val_data($cont);
    $this->contenido = $cont;
    $vid = $this->val_data($vid);
    $this->video = $vid;
  }

  public function id_match_post ($con) {
    $query = $con->prepare("SELECT id FROM posts WHERE titulo= :titulo");
    $query->bindParam(":titulo", $this->titulo);
    $query->execute();
    $match = $query->fetch(PDO::FETCH_ASSOC);

    return $match['id'];
  }

  public function crear_post ($con, $autor) {
    $query = $con->prepare("INSERT INTO posts (titulo, autor, contenido, puntos, video)
    VALUES (:titulo, :autor, :contenido, 0, :video)");
    $query->bindParam(":titulo", $this->titulo);
    $query->bindParam(":autor", $autor);
    $query->bindParam(":contenido", $this->contenido);
    $query->bindParam(":video", $this->video);

    $query->execute();
  }

  public function id_comentarios ($con, $post_id) {
    $query = $con->prepare("SELECT * FROM comentarios WHERE post_id= :id ORDER BY id ASC");
    $query->bindParam(':id', $post_id);
    $query->execute();
    $match = $query->fetchAll();

    return $match;
  }

  public function asignar_comentario ($comment) {
    $comment = $this->val_data($comment);
    $this->comentario = $comment;
  }

  public function crear_comentario ($con, $post, $autor) {
    $query = $con->prepare("INSERT INTO comentarios (post_id, autor_id, contenido)
      VALUES (:post_id, :autor_id, :contenido)");
    $query->bindParam(':post_id', $post);
    $query->bindParam(':autor_id', $autor);
    $query->bindParam(':contenido', $this->comentario);
    $query->execute();
  }

  public function id_permisos ($con) {
    $query = $con->prepare("SELECT permisos FROM usuarios WHERE username= :username");
    $query->bindParam(':username', $this->username);
    $query->execute();

    $match = $query->fetch();
    return $match['permisos'];
  }

  public function mostrar_users ($con) {
    $query = $con->prepare("SELECT id, username, correo, fecha_nacimiento, avatar, permisos, activo
      FROM usuarios");
    $query->execute();
    $match = $query->fetchAll();
    return $match;
  }

  public function mostrar_unico_user ($con, $user_id) {
    $query = $con->prepare("SELECT id, username, correo, fecha_nacimiento, avatar, permisos, activo
      FROM usuarios WHERE id= :id");
    $query->bindParam(':id', $user_id);
    $query->execute();
    $match = $query->fetch();
    return $match;
  }

  public function asignar_estado ($status) {
    $this->estado = $status;
  }

  public function cambiar_activo ($con, $id_user, $status) {
    // $status = intval($status);
    $query = $con->prepare("UPDATE usuarios SET activo = :activo WHERE id = :id");
    $query->bindParam(':activo', $status);
    $query->bindParam(':id', $id_user);
    $query->execute();
  }

  public function mostrar_calendario ($con) {
    $query = $con->prepare("SELECT * FROM calendario ORDER BY id ASC");
    $query->execute();
    $match = $query->fetchAll();
    return $match;
  }

  public function unico_evento ($con, $id_evento) {
    $query = $con->prepare("SELECT * FROM calendario WHERE id= :id");
    $query->bindParam(':id', $id_evento);
    $query->execute();
    $match = $query->fetch();
    return $match;
  }

  public function asignar_evento ($lug, $desc, $fech, $hour) {
    $this->lugar = $this->val_data($lug);
    $this->descripcion = $this->val_data($desc);
    $this->fecha_evento = $this->val_data($fech);
    $this->hora = $this->val_data($hour);
  }

  public function crear_evento ($con, $user_id) {
    $query = $con->prepare("INSERT INTO calendario (fecha_evento, hora_evento, lugar, descripcion, autor_id)
    VALUES (:fecha_evento, :hora, :lugar, :descripcion, :autor)");
    $query->bindParam(':fecha_evento', $this->fecha_evento);
    $query->bindParam(':hora', $this->hora);
    $query->bindParam(':lugar', $this->lugar);
    $query->bindParam(':descripcion', $this->descripcion);
    $query->bindParam(':autor', $user_id);
    $query->execute();
  }

  public function asignar_problema ($tit, $cont, $resp, $vid, $img) {
    $this->titulo_problema = $this->val_data($tit);
    $this->video_problema = $vid;
    $this->imagen = $img;
    $this->contenido_problema = $cont;
    $this->respuesta = $resp;
  }

  public function crear_problema ($con, $user_id) {
    $hoy = date_create();
    $fecha = date_format($hoy, "Y-m-d G:i:s");
    $query = $con->prepare("INSERT INTO problemas (autor_id, fecha_creado, titulo, contenido, respuesta, imagen, video)
    VALUES (:autor_id, :fecha_creado, :titulo, :contenido, :respuesta, :imagen, :video)");
    $query->bindParam(':autor_id', $user_id);
    $query->bindParam(':fecha_creado', $fecha);
    $query->bindParam(':titulo', $this->titulo_problema);
    $query->bindParam(':contenido', $this->contenido_problema);
    $query->bindParam(':respuesta', $this->respuesta);
    $query->bindParam(':imagen', $this->imagen);
    $query->bindParam(':video', $this->video_problema);
    $query->execute();
  }

  public function mostrar_problemas ($con) {
    $query = $con->prepare("SELECT * FROM problemas ORDER BY id DESC");
    $query->execute();
    $match = $query->fetchAll();

    return $match;
  }

  public function ver_problema ($con, $prob_id) {
    $query = $con->prepare("SELECT * FROM problemas WHERE id= :id");
    $query->bindParam(':id', $prob_id);
    $query->execute();
    $match = $query->fetch();
    return $match;
  }

  public function asignar_respuesta ($resp) {
    $this->comentario = $resp;
  }

  public function crear_respuesta ($con, $id_prob, $user_id) {
    $hoy = date_create();
    $fecha = date_format($hoy, "Y-m-d G:i:s");
    $query = $con->prepare("INSERT INTO respuestas (autor_id, problema_id, comentario, fecha_creado)
    VALUES (:autor_id, :problema_id, :comentario, :fecha_creado)");
    $query->bindParam(':autor_id', $user_id);
    $query->bindParam(':problema_id', $id_prob);
    $query->bindParam(':comentario', $this->comentario);
    $query->bindParam(':fecha_creado', $fecha);
    $query->execute();
  }

  public function id_respuestas ($con, $prob_id) {
    $query = $con->prepare("SELECT * FROM respuestas WHERE problema_id= :id ORDER BY id ASC");
    $query->bindParam(':id', $prob_id);
    $query->execute();
    $match = $query->fetchAll();

    return $match;
  }

  private function val_data ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
}
