<?php require 'header.php'; ?>
     <div class="container">
        <div class="row">
            <div class="col my-4 "> 
                <div class="card card-block centrado">
                    <h2>Editar POST</h2>

                    <form enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form_nuevo my-4">
                            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                            <input type="text" name="titulo" class="titulo_nuevo" value="<?php echo $post['titulo']; ?>">

                            <input type="text" name="extracto" class="extracto_nuevo" value="<?php echo $post['extracto']; ?>">

                            <textarea name="texto"><?php echo $post['texto']; ?></textarea>

                            <input type="file" name="img">
                            <input type="hidden" name="img-guardada" value="<?php echo $post['img']; ?>">
                            <input type="submit" value="Guardar Cambios" class="btn-login nuevo_btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require 'footer.php'; ?>