<?php
include '../conexion/conexion.php';
if(isset($_POST['editar'])){
    $id_producto=$_POST['id_producto'];
    $id_proveedor=$_POST['id_proveedor'];
    $nombreproducto=$_POST['nombreproducto'];
    $descripcion=$_POST['descripcion'];
    $costocompra=$_POST['costocompra'];
    $costoventa=$_POST['costoventa'];
    $stock=$_POST['stock'];
    $fecha=$_POST['fecha'];

     $consulta = "UPDATE producto SET id_proveedor='$id_proveedor', nombreproducto='$nombreproducto', descripcion='$descripcion', costocompra='$costocompra', costoventa='$costoventa',stock='$stock', fecha='$fecha' WHERE id_producto = '$id_producto'";

    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Se edito correctamente...');
            </script>
        ";
        header('location:./listarProducto.php');
    }else{
        echo "
            <script>
                alert('No se registro...');
            </script>
        ";
        header('location:./listarProducto.php');
    }
} 
?>
<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <h1 class="text-center text-warning font-weight-light py-2">Editar Producto</h1>

            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">

                        <?php
                        $cod = $_GET['cod'];
                        $consulta = "SELECT * FROM producto WHERE id_producto ='$cod'";
                        $res = mysqli_query($con, $consulta);
                        ?>
                        <?php while ($reg = mysqli_fetch_array($res)) : ?>
                            <form class="border border-dark mt-5 p-3 rounded" method="POST" action="">

                                <div class="d-flex justify-content-around flex-wrap">
                                    <div class="form-group w-25 p-2">
                                        <label for="id_proveedor" class="text-white">Empresa </label>
                                        <select class="form-control " name="id_proveedor" id="id_proveedor">
                                            <?php
                                            $consultaa = "SELECT * FROM proveedor";
                                            $ress = mysqli_query($con, $consultaa);
                                            while ($regg = mysqli_fetch_array($ress)) {
                                            ?>
                                                <option value="<?php echo $regg['id_proveedor'] ?>"> <?php echo $regg['empresa'] ?> </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group w-75 p-2">
                                        <label class="text-white" for="ci">Nombre Producto</label>
                                        <input name="nombreproducto" value="<?php echo $reg['nombreproducto'] ?>" type="text" class="form-control" id="ci">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-around">
                                    <div class="form-group">
                                        <label class="text-white" for="descripcion">Descripcion</label>
                                        <input name="descripcion" value="<?php echo $reg['descripcion'] ?>" type="text" class="form-control" id="descripcion">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="costocompra">Costo de Compra</label>
                                        <input name="costocompra" value="<?php echo $reg['costocompra'] ?>" type="text" class="form-control" id="costocompra">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="costoventa">Costo de Venta</label>
                                        <input name="costoventa" value="<?php echo $reg['costoventa'] ?>" type="text" class="form-control" id="costoventa">
                                    </div>
                                </div>

                                <div class="d-flex justify-content-around flex-wrap">
                                    <div class="form-group w-50 px-2">
                                        <label class="text-white" for="stock">Stock</label>
                                        <input name="stock" type="text" value="<?php echo $reg['stock'] ?>" class="form-control" id="stock">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white" for="fecha">Fecha</label>
                                        <input name="fecha" value="2021-03-29" type="date" value="<?php echo $reg['fecha'] ?>" class="form-control" id="fecha">
                                    </div>
                                </div>
                                <div class="form-group">
                                <input name="id_producto" value="<?php echo $reg['id_producto'] ?>" type="hidden" class="form-control" id="id">
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