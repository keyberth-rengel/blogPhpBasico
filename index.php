<?php 
    require 'admin/config.php';
    require 'functions.php';
    $conexion = conexion($db_config); 
   if (!$conexion) {
    header('Location: error.php');
   }
   $posts =  obtener_post($blog_config['postPagina'], $conexion);
   if (!$posts) {
    header('Location: error.php');
   }
   
    require 'views/index.view.php';

?>