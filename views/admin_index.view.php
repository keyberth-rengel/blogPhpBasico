<?php require 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col my-4 "> 
                <h3>Panel de Control:</h3>
                <a href="nuevo.php" class="btn-login">Nuevo Post</a>
                <a href="cerrar.php" class="btn-login">Cerrar Sesion</a>
            </div>
        </div>
    </div>


    <!-- ################################# Articulos ######################## -->
        <?php foreach($posts as $post): ?>
    <div class="container">
        <div class="row">
            <div class="col my-3 "> 
                <div class="card card-block centrado">
                    <h2 class="card-title"><?php echo $post['id'] . '.- ' . $post['titulo']; ?></h2>
                    <div class="enlaces">
                        <a href="editar.php?id=<?php echo $post['id']; ?>">Editar</a>
                        <a href="single.php?id=<?php echo $post['id']; ?>">Ver</a>
                        <a href="borrar.php?id=<?php echo $post['id']; ?>">Borrar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php endforeach; ?> 

<?php $numero_paginas = numero_pagina($blog_config['postPagina'], $conexion); ?>
<div class="container">
        <div class="row text-center">
            <div class="col paginacion">
                <ul>
                <!-- boton de retroceso -->
                    <?php if(pagina_actual() === 1 ): ?>
                        <li class="disabled">&laquo;</li>
                    <?php else: ?>
                        <li><a href="admin.php?pagina=<?php echo pagina_actual() - 1; ?>">&laquo;</a></li>
                    <?php endif; ?>

                    <!-- botones -->
                    <?php for( $i = 1; $i <= $numero_paginas; $i++): ?>
                        <?php if(pagina_actual() === $i): ?>
                            <li class="active"><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php else: ?>
                            <li><a href="admin.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endif; ?>

                    <?php endfor; ?>

                        <!-- // bon final -->
                    <?php if(pagina_actual() == $numero_paginas ): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="admin.php?pagina=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>