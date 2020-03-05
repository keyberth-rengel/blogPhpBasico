<?php require 'header.php'; ?>
     <div class="container">
        <div class="row">
            <div class="col my-4 "> 
                <div class="card card-block centrado">
                    <h2>Iniciar Sesion.</h2>

                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario_login my-4">
                            <input type="text" name="usuario" id="usuario" class="usuario" placeholder="Usuario">

                            <input type="password" name="password" id="possword" class="password" placeholder="Contraseña">

                            <input type="submit" value="Iniciar sesion" class="btn-login">
                    </form>

                    <?php if(!empty($error_session)): ?>
                    <div class="alert alert-danger">
                        <p class=""><?php echo $error_session; ?></p>
                    </div>
                    <?php endif;?>
                    
                    
                </div>
            </div>
        </div>
    </div>

<?php require 'footer.php'; ?>