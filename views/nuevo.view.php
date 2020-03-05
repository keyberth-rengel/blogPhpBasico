<?php require 'header.php'; ?>
     <div class="container">
        <div class="row">
            <div class="col my-4 "> 
                <div class="card card-block centrado">
                    <h2>Nuevo Post</h2>

                    <form enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form_nuevo my-4">
                            <input type="text" name="titulo" class="titulo_nuevo" placeholder="Titulo">

                            <input type="text" name="extracto" class="extracto_nuevo" placeholder="Extracto">

                            <textarea name="texto" placeholder="Texto"></textarea>

                            <input type="file" name="img">

                            <input type="submit" value="Guardar Articulo" class="btn-login nuevo_btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require 'footer.php'; ?>