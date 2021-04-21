<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Registro de Empleados</h1>

            <form class="border border-info mt-5 p-3 rounded" method="POST" action="./grabarEmpleado.php">

                <div class="d-flex justify-content-around flex-wrap">
                    <div class="form-group w-25 p-2">
                        <label for="cargo" class="text-white">Cargo </label>
                        <select class="form-control " name="cargo" id="cargo">
                            <?php
                            include("../conexion/conexion.php");
                            $consulta = "SELECT * FROM cargo WHERE estado = 'activo'";
                            $res = mysqli_query($con, $consulta);
                            while ($reg = mysqli_fetch_array($res)) {
                            ?>
                                <option value="<?php echo $reg['id_cargo'] ?>"> <?php echo $reg['cargo'] ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group w-75 p-2">
                        <label class="text-white" for="ci">CI</label>
                        <input name="ci" type="number" class="form-control" id="ci">
                    </div>
                </div>

                <div class="d-flex justify-content-around">
                    <div class="form-group">
                        <label class="text-white" for="nombre">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre">
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="paterno">Paterno</label>
                        <input name="paterno" type="text" class="form-control" id="paterno">
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="materno">Materno</label>
                        <input name="materno" type="text" class="form-control" id="materno">
                    </div>
                </div>

                <div class="d-flex justify-content-around flex-wrap">
                    <div class="form-group w-50 px-2">
                        <label class="text-white" for="direccion">Direccion</label>
                        <input name="direccion" type="text" class="form-control" id="direccion">
                    </div>
                    <div class="form-group w-50 px-2">
                        <label class="text-white" for="telefono">Telefono</label>
                        <input name="telefono" type="number" class="form-control" id="telefono">
                    </div>
                </div>


                <div class="d-flex justify-content-around">
                    <div class="form-group">
                        <label class="text-white" for="fecha_nacimineto">Fecha-Nac</label>
                        <input name="fecha_nacimiento" value="2021-03-29" type="date" class="form-control" id="fecha_nacimineto">
                    </div>

                    <div class="form-group">
                        <label class="text-white" for="materno">Genero</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="M" value="M">
                            <label class="form-check-label text-white" for="M">masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="genero" id="F" value="F">
                            <label class="form-check-label text-white" for="F">fenenino</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="interes">Interes</label>
                        <input name="interes" type="text" class="form-control" id="interes">
                    </div>
                </div>


                <input class="btn btn-info btn-block" type="submit" value="Registrar" name="registrar">
            </form>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>