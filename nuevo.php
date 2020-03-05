<?php session_start();
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
    $img = $_FILES['img']['tmp_name'];
    
    //comprobamos que sea una imagen
        $check = @getimagesize($_FILES['img']['tmp_name']);


          $carpeta = $blog_config['carpeta_imagenes']; //carpeta dinde se va alojar la imagen luego de ser subida
          $ruta = $carpeta . $_FILES['img']['name'];
          //colocarla en la carpeta luego de subirla
          move_uploaded_file($img, $ruta);

          $consulta = $conexion->prepare("INSERT INTO blog (id, titulo, extracto, texto, img) VALUES (NULL, :titulo, :extracto, :texto, :img)");
          $consulta->execute(array(':titulo' => $titulo,
                                   ':extracto' => $extracto,
                                   ':texto' => $texto,
                                   ':img' => $_FILES['img']['name'], 
                                   ));
        header('Location: http://localhost/Proyectos/Blog_practica/admin.php');



} 

require 'views/nuevo.view.php';
?>