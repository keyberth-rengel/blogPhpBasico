<?php require 'header.php'; ?>

    <!-- ################################# Articulos ######################## -->
        <?php foreach($resultados as $post): ?>
    <div class="container">

        <div class="row">
            <div class="col mt-4">
            <?php if(!empty($resultado_exito)): ?>
                <h2> <b><?php echo $resultado_exito; ?></b> </h2>
            <?php else: ?>
                <h2> <b><?php echo $resultado_error; ?></b> </h2>
            <?php endif; ?>
            </div>
        
        </div>
        <div class="row">
            <div class="col my-4 "> 
                <div class="card card-block centrado">
                    <h2 class="card-title"><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['titulo']; ?></a></h2>
                    <p class="card-subtitle"><?php echo $post['fecha']; ?></p>
                    <div class="img">
                        <a href="single.php?id=<?php echo $post['id'];?>">
                            <img class="img-fluid" src="img/<?php echo $post['img']; ?>" alt="">
                        </a>
                    </div>
                    <p class="card-text text-justify"> <?php echo $post['extracto']; ?></p>
                    <a href="single.php?id=<?php echo $post['id'];?>" class="card-link">Continuar leyendo</a>
                </div>
            </div>
        </div>
    </div>
        <?php endforeach; ?> 

<?php require 'paginacion.php'; ?>
<?php require 'footer.php'; ?>