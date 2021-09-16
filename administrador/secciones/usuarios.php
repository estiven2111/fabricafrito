<?php include("../template/cabecera.php"); ?>


<?php

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtContrasenia = (isset($_POST['txtContrasenia'])) ? $_POST['txtContrasenia'] : "";
$txtRol_usuario = (isset($_POST['txtRol_usuario'])) ? $_POST['txtRol_usuario'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";


include("../config/db.php");

echo $accion;

switch ($accion) {


    case "Agregar":


        $sentenciaSQL = $conexion->prepare("INSERT INTO usuario(nombre, contraseña, rol_usuario) VALUES (:nombre, :contraseña, :rol_usuario);");
        $sentenciaSQL->bindparam(':nombre', $txtNombre);
        $sentenciaSQL->bindparam(':contraseña', $txtContrasenia);

        $sentenciaSQL->execute();

        $sentenciaSQL->bindparam(':rol_usuario', $nombreArchivo);
        header("Location:usuarios.php");
        break;


    case "Modificar":

        $sentenciaSQL = $conexion->prepare("UPDATE  usuario SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindparam(':nombre', $txtNombre);
        $sentenciaSQL->bindparam(':id', $txt);
        $sentenciaSQL->execute();


        $sentenciaSQL = $conexion->prepare("UPDATE  usuario SET contraseña=:contraseña WHERE id=:id");
        $sentenciaSQL->bindparam(':contraseña', $txtContrasenia);
        $sentenciaSQL->bindparam(':id', $txtID);
        $sentenciaSQL->execute();


        header("Location:usuarios.php");
        break;


    case "Cancelar":

        header("Location:usuarios.php");
        break;

    case "Seleccionar":

        $sentenciaSQL = $conexion->prepare("SELECT * FROM usuario WHERE id=:id");
        $sentenciaSQL->bindparam(':id', $txtID);
        $sentenciaSQL->execute();
        $usuarios = $sentenciaSQL->fetch(PDO::FETCH_LAZY);


        $txtNombre = $usuarios['nombre'];
        $txtContrasenia = $usuarios['contraseña'];

        break;

    case "Borrar":

        $sentenciaSQL = $conexion->prepare("DELETE FROM usuario WHERE id=:id");
        $sentenciaSQL->bindparam(':id', $txtID);
        $sentenciaSQL->execute();

        header("Location:usuarios.php");

        break;
}

$sentenciaSQL = $conexion->prepare("SELECT * FROM usuario");
$sentenciaSQL->execute();
$listaUsuarios = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="row justify-content-center">
    <div class="col-md-5 card">
        <div class="card-header">
            Registrar usuarios
        </div>
        <div class="card-body">
            <form method="POST">

                <div class="form-group">
                    <label>Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" placeholder="Escribe nombre usuario">

                </div>

                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" class="form-control" name="txtContrasenia" placeholder="Escribe la contraseña">
                </div>

                <button type="submit" name="accion" value="Agregar" class="btn btn-primary">Registrar</button>
            </form>

        </div>

    </div>

    <div class="col-md-7">

        <table class="table table-bordered ">
            <thead>
                <tr>
                
                    <th>rol_usuario</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Nom_supervisor</th>
                    <th>Nom_negocio</th>
                    <th>Num_contacto</th>
                    <th>sector</th>
                    <th>Hora_aper_lun_sab</th>
                    <th>Hora_aper_domingo</th>
                    <th>Hora_aper_festivos</th>
                    <th>Apertura_24H</th>
                </tr>
            </thead>
            <tbody>


                <?php foreach ($listaUsuarios as $usuarios) { ?>
                    <tr>
                        <td><?php echo $usuarios['id']; ?></td>
                        <td><?php echo $usuarios['nombre']; ?></td>
                        <td><?php echo $usuarios['contraseña']; ?></td>
                        <td><?php echo $usuarios['rol_usuario']; ?></td>



                        <td>
                            <form method="post">

                                <input type="hidden" name="txtID" id="txtID" value="<?php echo $usuarios['id']; ?>" />
                                <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                                <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />

                                <form id="form1" name="form1" method="post" action="Borrar usuarios.php?id=<?= $row["id"] ?>" onsubmit="return confirmation()">

                                <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                               
                                </form>

                                <script type="text/javascript">
                                    
                                    function confirmation() {
                                        if (confirm("Realmente desea eliminar?")) {
                                            return true;
                                        }
                                        return false;
                                    }
                                 
                                </script>


                            </form>
                        </td>
                    </tr>

                <?php } ?>

            </tbody>
        </table>


    </div>


    <?php include("../template/pie.php"); ?>