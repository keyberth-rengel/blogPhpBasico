<?php session_start();
require 'admin/config.php';
require 'functions.php';

comprobarSesion();

$conexion = conexion($db_config); 
if (!$conexion) {
 header('Location: error.php');
}
$posts =  obtener_post($blog_config['postPagina'], $conexion);

require 'views/admin_index.view.php';
?>