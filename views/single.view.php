<?php require 'header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col my-4 ">
                <div class="card card-block centrado">
                    <h2 class="card-title"><?php echo $post['titulo']; ?></h2>
                    <p class="card-subtitle"><?php echo fecha($post['fecha']); ?></p>
                    <div class="img">
                            <img class="img-fluid" src="img/<?php echo $post['img']; ?>" alt="">
                     </div>
                    <p class="card-text text-justify"><?php echo nl2br($post['texto']); ?></p>
                </div>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>