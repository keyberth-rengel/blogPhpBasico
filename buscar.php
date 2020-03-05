<?php 
    require 'admin/config.php';
    require 'functions.php';
    $conexion = conexion($db_config); 
   if (!$conexion) {
    header('Location: error.php');
   }

   if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
       $busqueda = limpiarDatos($_GET['busqueda']);

       $consulta = $conexion->prepare('SELECT * FROM blog WHERE titulo LIKE :busqueda or texto LIKE :busqueda');
       $consulta->execute(array(':busqueda' => "%$busqueda%"));
       $resultados = $consulta->fetchAll();

       if (empty($resultados)) {
           $resultado_exito = 'No se han encontrados resultados de la busqueda: ' . $busqueda;
       }else {
            $resultado_error = 'Resultados de la busqueda: ' . $busqueda;
       }
   }else{
    header('Location: index.php');
   }

   require 'views/buscar.view.php';

?>