<?php
    require 'admin/config.php';
    require 'functions.php';
    $conexion = conexion($db_config); 
    $id_articulos = id_articulos($_GET['id']);

   if (!$conexion) {
    header('Location: error.php');
   }
   if (empty($id_articulos)) {
    header('Location: index.php');
   }
   $post =  obtener_post_por_id($conexion, $id_articulos);
   if (!$post) {
    header('Location: index.php');
   } 
   $post = $post[0];
    require 'views/single.view.php';


?>