    <form  method="POST" action="<?php echo base_url(); ?>Usuario/actualizarUsuario">
                <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="text" class="form-control" name="id" readonly="true" id="id" value="<?php echo $usuario->id_usuario ; ?>">
                </div>
                <div class="form-group">
                    <label for="usuario">Nombre:</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario->usuario ; ?>">
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="mail" class="form-control" name="correo" id="correo" value="<?php echo $usuario->correo ; ?>">
                </div>
                <div class="form-group">
                    <label for="pass">Contrasena:</label>
                    <input type="password" class="form-control" name="pass" id="pass">
                </div>
                <input type="submit" value="Registrar" class="btn btn-primary">
                <input type="reset" value="Limpiar" class="btn btn-danger">

        
    </form>
