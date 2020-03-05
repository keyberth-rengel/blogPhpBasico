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
                        <form name="busqueda" class="buscar" method="GET" action="buscar.php">
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
