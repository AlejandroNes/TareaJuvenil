<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-white font-weight-light py-2">Registro de Productos</h1>

            <form class="border border-dark mt-5 p-3 rounded" method="POST" action="./grabarProducto.php">

                <div class="d-flex justify-content-around flex-wrap">
                    <div class="form-group w-25 p-2">
                        <label for="id_proveedor" class="text-white">ID proovedor </label>
                        <select class="form-control " name="id_proveedor" id="id_proveedor">
                            <?php
                            include("../conexion/conexion.php");
                            $consulta = "SELECT * FROM proveedor";
                            $res = mysqli_query($con, $consulta);
                            while ($reg = mysqli_fetch_array($res)) {
                            ?>
                                <option value="<?php echo $reg['id_proveedor'] ?>"> <?php echo $reg['empresa'] ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group w-75 p-2">
                        <label class="text-white" for="ci">Nombre Producto</label>
                        <input name="nombreproducto" type="text" class="form-control" id="ci">
                    </div>
                    </div>

                <div class="d-flex justify-content-around">
                    <div class="form-group">
                        <label class="text-white" for="descripcion">Descripcion</label>
                        <input name="descripcion" type="text" class="form-control" id="descripcion">
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="costocompra">Costo de Compra</label>
                        <input name="costocompra" type="text" class="form-control" id="costocompra">
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="costoventa">Costo de Venta</label>
                        <input name="costoventa" type="text" class="form-control" id="costoventa">
                    </div>
                </div>

                <div class="d-flex justify-content-around flex-wrap">
                    <div class="form-group w-50 px-2">
                        <label class="text-white" for="stock">Stock</label>
                        <input name="stock" type="text" class="form-control" id="stock">
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="fecha">Fecha</label>
                        <input name="fecha" value="2021-03-29" type="date" class="form-control" id="fecha">
                    </div>
                </div>


                <input class="btn btn-dark btn-block" type="submit" value="Registrar producto" name="registrar">
            </form>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>