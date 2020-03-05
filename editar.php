<?php  session_start();
require 'admin/config.php';
require 'functions.php';

comprobarSesion();

$conexion = conexion($db_config); 
if (!$conexion) {
 header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = $_POST['texto'];
    $id = limpiarDatos($_POST['id']);
    $img_guardada = $_POST['img-guardada'];
    $img = $_FILES['img'];

    if (empty($img)) {
       $img = $img_guardada;
    }else {
         $ruta = $blog_config['carpeta_imagenes'] . $_FILES['img']['name'];
          move_uploaded_file($_FILES['img']['tmp_name'], $ruta);
          $img = $_FILES['img']['name'];
    }

    $consulta = $conexion->prepare('UPDATE blog SET titulo = :titulo, extracto = :extracto, texto = :texto, img = :img WHERE id = :id');

    $consulta->execute(array(
        ':titulo' => $titulo, 
        ':extracto' => $extracto, 
        ':texto' => $texto, 
        ':img' => $img, 
        ':id' => $id
    ));
    header('Location: admin.php');

} else {
    $id_articulo = id_articulos($_GET['id']);

    if (empty($id_articulo)) {
        header('Location: admin.php');
    }
    $post = obtener_post_por_id($conexion, $id_articulo);
    if (!$post) {
        header('Location: admin.php');
    }
    $post = $post[0];                 
}
require 'views/editar.view.php';
?>