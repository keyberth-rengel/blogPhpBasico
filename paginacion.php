<!-- ################################# Paginacion ######################## -->
<?php $numero_paginas = numero_pagina($blog_config['postPagina'], $conexion); ?>
<div class="container">
        <div class="row text-center">
            <div class="col paginacion">
                <ul>
                <!-- boton de retroceso -->
                    <?php if(pagina_actual() === 1 ): ?>
                        <li class="disabled">&laquo;</li>
                    <?php else: ?>
                        <li><a href="index.php?pagina=<?php echo pagina_actual() - 1; ?>">&laquo;</a></li>
                    <?php endif; ?>

                    <!-- botones -->
                    <?php for( $i = 1; $i <= $numero_paginas; $i++): ?>
                        <?php if(pagina_actual() === $i): ?>
                            <li class="active"><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php else: ?>
                            <li><a href="index.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                        <?php endif; ?>

                    <?php endfor; ?>

                        <!-- // bon final -->
                    <?php if(pagina_actual() == $numero_paginas ): ?>
                        <li class="disabled">&raquo;</li>
                    <?php else: ?>
                        <li><a href="index.php?pagina=<?php echo pagina_actual() + 1; ?>">&raquo;</a></li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
