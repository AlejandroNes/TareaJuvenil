<?php
include '../conexion/conexion.php';
$errores = '';
if (isset($_POST['editar'])) {

    $em = $_POST['emp'];
    $us = $_POST['usr'];
    $pa1 = $_POST['pas1'];
    $pa2 = $_POST['pas2'];
    $ni = $_POST['nivel'];
    $id_empleado = $_POST['id_empleado'];

    // encriptar contraseñas
    $pa1 =  password_hash($pa1, PASSWORD_DEFAULT);
    if (password_verify($pa2, $pa1)) {


        $consulta = "UPDATE usuarios SET usuario='$us', pasword='$pa1', nivel='$ni' WHERE id_empleado = '$id_empleado'";

        $res = mysqli_query($con, $consulta);
        if ($res) {
            echo "
            <script>
                alert('Se edito correctamente...');
            </script>
        ";
            header('location:./listarUsuario.php');
        } else {
            echo "
            <script>
                alert('No se registro...');
            </script>
        ";
            header('location:./listarUsuario.php');
        }
    } else {
        $errores .= "Ingrese constraseñas iguales <br>";
    }
}
?>
<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <h1 class="text-center text-warning font-weight-light py-2">Editar Usuario</h1>

            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">

                        <?php
                       
                        $cod = $_GET['cod'];
                        $consulta = "SELECT * FROM usuarios WHERE id_empleado ='$cod'";
                        $res = mysqli_query($con, $consulta);
                        ?>
                        <?php while ($reg = mysqli_fetch_array($res)) : ?>

                            <form class="border border-secondary mt-5 p-3 rounded" method="post" action="">
                                <div class="d-flex justify-content-around">
                                    <div class="col-5">
                                        <label class="text-white font-weight-light">Empleado:</label>
                                        <select name="emp" class="form-control" id="">
                                            <?php
                                            include '../conexion/conexion.php';
                                            $consulta2 = "SELECT * FROM empleado ORDER BY paterno ASC";
                                            $res1 = mysqli_query($con, $consulta2);
                                            while ($reg2 = mysqli_fetch_array($res1)) {
                                            ?>
                                                <option value="<?php echo $reg1['ci']; ?>"> <?php echo $reg2['nombre'] . " " . $reg2['paterno']; ?></option>

                                            <?php
                                            }

                                            ?>
                                        </select>

                                    </div>
                                    <div class="col-5">
                                        <label class="text-white font-weight-light" for="">Usuario:</label>
                                        <input class="form-control" type="text" name="usr" value="<?php echo $reg['usuario'] ?>">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <div class="col-5">
                                        <label class="text-white font-weight-light" for="">Contraseña:</label>
                                        <input  placeholder="ingrese nueva contraseña" class="form-control" type="text" name="pas1">
                                    </div>
                                    <div class="col-5">
                                        <label class="text-white font-weight-light" for="">Repita Contraseña:</label>
                                        <input placeholder="repita la contraseña"  class="form-control" type="text" name="pas2">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-around mt-4">
                                    <div class="col-6">
                                        <select class="form-control" name="nivel">
                                            <option value="1">Administrador</option>
                                            <option value="2">Secretaria</option>
                                            <br>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <input name="id_empleado" value="<?php echo $reg['id_empleado'] ?>" type="hidden" class="form-control">
                                    </div>
                                    <input class="btn btn-info " type="submit" name="editar" value="Editar usuario">
                                </div>
                            </form>
                            
                        <?php endwhile ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>