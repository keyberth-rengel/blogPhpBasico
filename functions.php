<?php
 function conexion($db_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$db_config['basedatos'], $db_config['usuario'], $db_config['password']);
        return $conexion;
        } catch (PDOException $e) {
            return false;
        }
    }

 function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos); 
    $datos = htmlspecialchars($datos);
    return $datos;
}
 function pagina_actual(){
    return isset($_GET['pagina']) ?  (int)$_GET['pagina'] : 1 ;
}

 function obtener_post($postPagina, $conexion ){
    $inicio = (pagina_actual() > 1) ? ( pagina_actual() * $postPagina - $postPagina ) : 0 ;
    $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM blog LIMIT $inicio, $postPagina");
    $consulta->execute();
    return $consulta->fetchAll();
}

function numero_pagina($postPagina, $conexion){
    $total_post = $conexion->prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    $numero_de_paginas = ceil($total_post / $postPagina);
    return $numero_de_paginas;
}

 function id_articulos($id){
    return (int)limpiarDatos($id);
 }
 function obtener_post_por_id($conexion, $id){
     $resultado = $conexion->query("SELECT * FROM blog WHERE id = $id LIMIT 1");
     $resultado = $resultado->fetchAll();
     return ($resultado) ? $resultado : false;
 }

 function fecha($fecha){
    $time = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $dia = date('d', $time);
    $mes = date('m', $time) - 1;
    $año = date('A', $time);

    $fecha = $dia . ' de ' . $meses[$mes] . ' del ' . $año;
    return $fecha;

}
function comprobarSesion(){
    if( !isset($_SESSION['admin']) ) {
        header('Location: index.php');
    }
}
?>