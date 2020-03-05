<?php session_start();
    require 'admin/config.php';
    require 'functions.php';
    $error_session = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = limpiarDatos($_POST['usuario']);
        $password = limpiarDatos($_POST['password']);

        if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['password']) {
            $_SESSION['admin'] = $usuario;
            header('Location: admin.php');
        }else {
            $error_session = 'Usuario o Contraseña incorrectos.';
        }
    }
    
    require 'views/login.view.php';
?>