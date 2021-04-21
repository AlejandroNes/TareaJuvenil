<?php
include '../conexion/conexion.php';
if (isset($_POST['editar'])) {

    $id_proveedor = $_POST['id_proveedor'];
    $em = $_POST['empresa'];
    $co = $_POST['contacto'];
    $ma = $_POST['mail'];
    $te = $_POST['telefono'];
    $di = $_POST['direccion'];
    $a = $_FILES['imagen']['name'];

    $consulta = "UPDATE proveedor SET empresa='$em', contacto='$co', mail='$ma', telefono='$te',direccion='$di',logo='$a'  WHERE id_proveedor = '$id_proveedor'";

    $res = mysqli_query($con, $consulta);
    if ($res) {
        echo "
            <script>
                alert('Se edito correctamente...');
            </script>
        ";
        header('location:./listarProveedor.php');
    } else {
        echo "
            <script>
                alert('No se registro...');
            </script>
        ";
        header('location:./listarProveedor.php');
    }
} 
?>
<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <h1 class="text-center text-warning font-weight-light py-2">Editar Proveedor</h1>

            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">

                        <?php
                        $cod = $_GET['cod'];
                        $consulta = "SELECT * FROM proveedor WHERE id_proveedor ='$cod'";
                        $res = mysqli_query($con, $consulta);
                        ?>
                        <?php while ($reg = mysqli_fetch_array($res)) : ?>
                            <form class="border border-secondary mt-5 p-3 rounded" enctype="multipart/form-data" method="POST" action="">
                                <div class="form-group">
                                    <label class="text-white" for="empresa">Empresa</label>
                                    <input name="empresa" type="text" value="<?php echo $reg['empresa'] ?>" class="form-control" id="empresa">
                                </div>

                                <div class="form-group">
                                    <label class="text-white" for="contacto">Contacto</label>
                                    <input name="contacto" type="text" value="<?php echo $reg['contacto'] ?>" class="form-control" id="contacto">
                                </div>

                                <div class="form-group">
                                    <label class="text-white" for="contacto">Email</label>
                                    <input name="mail" type="text" value="<?php echo $reg['mail'] ?>" class="form-control" id="mail">
                                </div>

                                <div class="form-group">
                                    <label class="text-white" for="contacto">Telefono</label>
                                    <input name="telefono" type="text" value="<?php echo $reg['telefono'] ?>" class="form-control" id="telefono">
                                </div>

                                <div class="d-inline-block d-flex justify-content-around">
                                    <div class="form-group d-inline-block">
                                        <label class="text-white" for="direccion">Dirección</label>
                                        <input name="direccion" type="text" value="<?php echo $reg['direccion'] ?>" class="form-control" id="direccion">
                                    </div>

                                    <div class="form-group d-inline-block">
                                        <label class="text-white" for="imagen">Imagen</label>
                                        <input accept="image/*" name="imagen" value="<?php echo $reg['logo'] ?>" type="file" class="form-control" id="imagen">
                                    </div>
                                </div>

                                <div class="form-group">
                                <input name="id_proveedor" value="<?php echo $reg['id_proveedor'] ?>" type="hidden" class="form-control" id="id">
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