<?php include '../HeaderYFooter/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Registro de Usuarios</h1>

            <form class="border border-secondary mt-5 p-3 rounded" method="post" action="grabarUsuario.php">
                <div class="d-flex justify-content-around">
                    <div class="col-5">
                        <label class="text-white font-weight-light">Empleado:</label>
                        <select name="emp" class="form-control" id="">
                            <?php
                            include("../conexion/conexion.php");
                            $consulta = "SELECT * FROM empleado ORDER BY paterno ASC";
                            $res = mysqli_query($con, $consulta);
                            while ($reg = mysqli_fetch_array($res)) {
                            ?>
                                <option value="<?php echo $reg['ci']; ?>"> <?php echo $reg['nombre'] . " " . $reg['paterno']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-5">
                        <label class="text-white font-weight-light" for="">Usuario:</label>
                        <input class="form-control" type="text" name="usr">
                    </div>
                </div>
                <div class="d-flex justify-content-around">
                    <div class="col-5">
                        <label class="text-white font-weight-light" for="">Contraseña:</label>
                        <input class="form-control" type="text" name="pas1">
                    </div>
                    <div class="col-5">
                        <label class="text-white font-weight-light" for="">Repita Contraseña:</label>
                        <input class="form-control" type="text" name="pas2">
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
                    <input class="btn btn-info " type="submit" name="registrar" value="Registrar">
                </div>
            </form>

        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>