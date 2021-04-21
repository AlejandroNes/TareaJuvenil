<?php
include '../conexion/conexion.php';
 if(isset($_POST['editar'])){
    $id_empleado=$_POST['id_empleado'];
    $cargo=$_POST['cargo'];
    $ci=$_POST['ci'];
    $nombre=$_POST['nombre'];
    $paterno=$_POST['paterno'];
    $materno=$_POST['materno'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $genero=$_POST['genero'];
    $interes=$_POST['interes'];

     $consulta = "UPDATE empleado SET id_cargo='$cargo', ci='$ci',nombre='$nombre',paterno='$paterno',materno='$materno',direccion='$direccion',telefono='$telefono',fecha_nacimiento='$fecha_nacimiento',genero='$genero',intereses='$interes' WHERE id_empleado = '$id_empleado'";

    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Se edito correctamente...');
            </script>
        ";
        header('location:./listarEmpleado.php');
    }else{
        echo "
            <script>
                alert('No se registro...');
            </script>
        ";
        header('location:./listarEmpleado.php');
    }
} 
?>
<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <h1 class="text-center text-warning font-weight-light py-2">Editar Clientes</h1>

            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">
                        <?php
                        $cod = $_GET['cod'];
                        $consulta = "SELECT * FROM empleado WHERE id_empleado ='$cod'";
                        $res = mysqli_query($con, $consulta);
                        ?>
                        <?php while ($reg = mysqli_fetch_array($res)) : ?>
                            <form class="border border-info mt-5 p-3 rounded" action="" method="POST">

                                <div class="d-flex justify-content-around flex-wrap">
                                    <div class="form-group w-25 p-2">
                                        <label for="cargo" class="text-white">Cargo</label>
                                        <select class="form-control " name="cargo" id="cargo">
                                            <?php
                                            $consultaa = "SELECT * FROM cargo";
                                            $ress = mysqli_query($con, $consultaa);
                                            while ($regg = mysqli_fetch_array($ress)) {
                                            ?>
                                                <option value="<?php echo $regg['id_cargo'] ?>"> <?php echo $regg['cargo'] ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group w-75 p-2">
                                        <label class="text-white" for="ci">CI</label>
                                        <input name="ci" value="<?php echo $reg['ci'] ?>" type="text" class="form-control" id="ci">
                                    </div>
                                </div>


                                <div class="d-flex justify-content-around">
                                    <div class="form-group">
                                        <label class="text-white" for="nombre">Nombre</label>
                                        <input name="nombre" type="text" class="form-control" value="<?php echo $reg['nombre'] ?>" id="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="paterno">Paterno</label>
                                        <input name="paterno" type="text" class="form-control" id="paterno" value="<?php echo $reg['paterno'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="materno">Materno</label>
                                        <input name="materno" type="text" class="form-control" id="materno" value="<?php echo $reg['materno'] ?>">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-around flex-wrap">
                                    <div class="form-group w-50 px-2">
                                        <label class="text-white" for="direccion">Direccion</label>
                                        <input name="direccion" type="text" class="form-control" id="direccion" value="<?php echo $reg['direccion'] ?>">
                                    </div>
                                    <div class="form-group w-50 px-2">
                                        <label class="text-white" for="telefono">Telefono</label>
                                        <input name="telefono" type="number" class="form-control" id="telefono" value="<?php echo $reg['telefono'] ?>">
                                    </div>
                                </div>


                                <div class="d-flex justify-content-around">
                                    <div class="form-group">
                                        <label class="text-white" for="fecha_nacimineto">Fecha-Nac</label>
                                        <input name="fecha_nacimiento" value="<?php echo $reg['fecha_nacimiento'] ?>" type="date" class="form-control" id="fecha_nacimineto">
                                    </div>

                                    <div class="form-group">
                                        <label class="text-white" for="materno">Genero</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genero" id="M" value="M">
                                            <label class="form-check-label text-white"  for="M">masculino</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="genero" id="F" value="F">
                                            <label class="form-check-label text-white" for="F">fenenino</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="interes">Interes</label>
                                        <input name="interes" type="text" class="form-control" id="interes" value="<?php echo $reg['intereses'] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                <input name="id_empleado" value="<?php echo $reg['id_empleado'] ?>" type="hidden" class="form-control" id="id">
                                </div>

                                <input class="btn btn-warning btn-block" type="submit" value="editar" name="editar">
                            </form>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>