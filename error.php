<?php
 require 'admin/config.php';
 require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>blog</title>
</head>
<body>
    <!-- ################################# Encabezado ######################## -->
    <header >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-4 mt-3">
                    <div class="izquierda text-left">
                        <p><a href="">Mi Primer Blog</a></p>
                    </div>
                </div>
                <div class="col-8 mt-3">
                    <div class="derecha">
                        <form name="busqueda" class="buscar" method="GET" action="<?php echo ruta; ?>/buscar.php">
                            <input  type="text" name="busqueda" placeholder="Buscar" id="buscar">
                            <button type="submit" class="icono fa fa-search"></button>
                        </form>
                        
                        <nav class="menu ">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#">Contacto <i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
            </div>
                
        </div>
    </header>   

    <!-- ################################# Articulos ######################## -->
    <div class="container">
        <div class="row">
            <div class="col my-4 "> 
                <div class="card card-block centrado">

                    <div class="alert alert-danger">
                        <h2 class="card-title">Error: Disculpe tenemos problemas para conectar con el servidor</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<!-- ################################# Footer ######################## -->
    <footer>
        <div class="container">
        <div class="row text-center">
            <div class="col">
                <p>Derechos reservados 2019 - Keyberth Rengel</p>
            </div>
        </div>
        </div>
    </footer>
    
</body>
</html>