<?php
include '../conexion/conexion.php';
if (isset($_POST['editar'])) {
    $id_cargo=$_POST['id_cargo'];
    $cargo=$_POST['cargo'];

    $consulta = "UPDATE cargo SET id_cargo='$id_cargo', cargo='$cargo' 
                  WHERE id_cargo = '$id_cargo'";

    $res = mysqli_query($con, $consulta);
    if ($res) {
        echo "
            <script>
                alert('Se edito correctamente...');
            </script>
        ";
        header('location:./listarCargo.php');
    } else {
        echo "
            <script>
                alert('No se registro...');
            </script>
        ";
        header('location:./listarCargo.php');
    }
}
?>
<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <h1 class="text-center text-warning font-weight-light py-2">Editar Cargo</h1>

            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">

                        <?php
                        $cod = $_GET['cod'];
                        $consulta = "SELECT * FROM cargo WHERE id_cargo ='$cod'";
                        $res = mysqli_query($con, $consulta);
                        ?>
                        <?php while ($reg = mysqli_fetch_array($res)) : ?>
                            <form class="border border-success mt-5 p-3 rounded" action="" method="POST">


                                <div class="d-flex justify-content-around">
                    
                                        <input value="<?php echo $reg['id_cargo'] ?>" name="id_cargo" type="hidden" class="form-control" id="id_cargo">
                    
                                    <div class="form-group">
                                        <label class="text-white" for="cargo">CARGO</label>
                                        <input value="<?php echo $reg['cargo'] ?>" name="cargo" type="text" class="form-control" id="cargo">
                                    </div>
                                </div>


                                <input class="btn btn-warning btn-block" type="submit" value="editar" name="editar">>
                            </form>
                        <?php endwhile ?>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>