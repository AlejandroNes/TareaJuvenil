<?php 
include '../conexion/conexion.php';
if(isset($_POST['editar'])){
     $id_cliente = $_POST['id_cliente'];
     $razonsocial = $_POST['razonsocial'];
     $nit_ci = $_POST['nit_ci'];

     $consulta = "UPDATE cliente SET razonsocial='$razonsocial', nit_ci='$nit_ci' 
                  WHERE id_cliente = '$id_cliente'";

    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Se edito correctamente...');
            </script>
        ";
        header('location:./listarCliente.php');
    }else{
        echo "
            <script>
                alert('No se registro...');
            </script>
        ";
        header('location:./listarCliente.php');
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
                        $consulta = "SELECT * FROM cliente WHERE id_cliente ='$cod'";
                        $res = mysqli_query($con, $consulta);
                        ?>
                        <?php while($reg = mysqli_fetch_array($res)): ?>
                            <form action="" method="POST">

                            <div class="form-group">
                                <label class="text-white" for="razon">Razon Social</label>
                                <input name="razonsocial" value="<?php echo $reg['razonsocial'] ?>" type="text" class="form-control" id="razon">
                            </div>

                            <div class="form-group">
                                <label class="text-white" for="nit">NIT / CI</label>
                                <input name="nit_ci" value="<?php echo $reg['nit_ci'] ?>" type="text" class="form-control" id="nit">
                            </div>
                            <div class="form-group">
                                <input name="id_cliente" value="<?php echo $reg['id_cliente'] ?>" type="hidden" class="form-control" id="id">
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