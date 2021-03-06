<?php
    if( !empty($errores['mote']) ){
        $error_mote = 'has-error';
    }else{
        $erro_mote = '';
    }

    if( !empty($errores['email']) ){
        $error_email = 'has-error';
    }else{
        $erro_email = '';
    }

    if( !empty($errores['password1']) ){
        $error_password = 'has-error';
    }else{
        $erro_pasword = '';
    }

    if( !empty($errores['password2']) ){
        $error_password = 'has-error';
    }else{
        $erro_password = '';
    }

 require_once $base_path.'admin/templates/header.php';
?>
        <div class="row">

            <div class="col-lg-4">
                <h2>Actualizar Autor</h2>
                <form role="form" method="POST" action="?update&id=<?=$_GET['id']?>">
                    <div class="form-group <?=$error_mote?>">
                        <label class="control-label" for="mote">Mote</label>
                        <input type="text" class="form-control" name="mote"
                            value="<?php echo (isset($mote))?$mote:''; ?>"
                            placeholder="Nombre de pila del autor">
                        <?php if( isset($errores['mote']['vacio']) ): ?>
                        <p class="help-block">El nombre no debe ser vacío.</p>
                        <?php endif; ?>
                        <?php if( isset($errores['mote']['longitud']) ): ?>
                        <p class="help-block">El nombre debe al menos 3 caracteres.</p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group <?=$error_email?>">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email"
                            value="<?php echo (isset($email))?$email:''; ?>"
                            placeholder="Email del autor">
                        <?php if( isset($errores['email']['format']) ): ?>
                        <p class="help-block">El email debe ser válido.</p>
                        <?php endif; ?>
                        <?php if( isset($errores['email']['vacio']) ): ?>
                        <p class="help-block">El email no debe ser vacío.</p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group <?=$error_password?>">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password1"
                            placeholder="Introducir contraseña">
                        <?php if( isset($errores['password1']['vacio']) ): ?>
                        <p class="help-block">La contraseña no debe ser vacía.</p>
                        <?php endif; ?>
                        <?php if( isset($errores['password1']['longitud']) ): ?>
                        <p class="help-block">La contraseña debe tener al menos 5 caracteres.</p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group <?=$error_password?>">
                        <label>Confirmar Password</label>
                        <input type="password" class="form-control" name="password2"
                            placeholder="Confirmar contraseña">
                        <?php if( isset($errores['password2']['vacio']) ): ?>
                        <p class="help-block">La contraseña no debe ser vacía.</p>
                        <?php endif; ?>
                        <?php if( isset($errores['password2']['longitud']) ): ?>
                        <p class="help-block">La contraseña debe tener al menos 5 caracteres.</p>
                        <?php endif; ?>
                        <?php if( isset($errores['password2']['diferentes']) ): ?>
                        <p class="help-block">Las contraseñas deben coincidir.</p>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="rol">Rol</label>
                        <select class="form-control" name="rol">
                            <option value="admin" <?php echo ($rol=='admin')?'selected':''; ?>>Administrador</option>
                            <option value="editor" <?php echo ($rol=='editor')?'selected':''; ?>>Editor</option>
                        </select>
                        <p class="help-block">Nivel de acceso del usuario.</p>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Autor</button>
                </form>
                <?php if(isset($mensaje)):?>
                <h3><?=$mensaje?></h3>
                <?php endif; ?>
            </div>
        </div> <!-- .row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php
    require_once $base_path.'admin/templates/footer.php';
?>