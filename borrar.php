<?php session_start();
require 'admin/config.php';
require 'functions.php';

comprobarSesion();

$conexion = conexion($db_config); 
if (!$conexion) {
 header('Location: error.php');
}

$id = limpiarDatos($_GET['id']);
if (!$id) {
    header('Location: admin.php');
}
$consulta = $conexion->prepare('DELETE FROM blog WHERE id = :id');
$consulta->execute(array(':id' => $id));
header('Location: admin.php');
?>