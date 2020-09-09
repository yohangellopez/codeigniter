<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="col-lg-5">
            <form  method="POST" action="Usuario/guardarUsuario">
                <div class="form-group">
                    <label for="usuario">Nombre:</label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="mail" class="form-control" name="correo" id="correo">
                </div>
                <div class="form-group">
                    <label for="pass">Contrasena:</label>
                    <input type="password" class="form-control" name="pass" id="pass">
                </div>
                <input type="submit" value="Registrar" class="btn btn-primary">
                <input type="reset" value="Limpiar" class="btn btn-danger">
            </form>
    </div>


    <div class="col-lg-7">
        <table border="1" class="table table-hover">
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th colspan="2">Modificaciones</th>
            </tr>
        
        <?php
            foreach ($Usuario as $user){
                echo 
                "<tr>" .
                    "<td>" .$user->usuario."</td>".
                    "<td>" .$user->correo."</td>".
                    "<td><a href='usuario/modifyUsuario/".$user->id_usuario."'><span ></span>Modificar</a></td>".
                    "<td><a href='usuario/deleteUsuario/".$user->id_usuario."'><span></span>Eliminar</a></td>".
                "</tr>";
            }
        ?>
        </table>
    </div>
</body>
</html>