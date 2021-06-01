<?php include '../HeaderYFooter/header.php';
if(isset($_POST['buscar'])){
    $opc = $_GET['cod'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-12">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Lista de Productos</h1>

            <table class="table table-striped table-bordered table-info w-100">
                <thead>
                    <tr>
                        <th>ID prod</th>
                        <th>Empresa</th>
                        <th>Nombre Producto</th>
                        <th>Descripcion</th>
                        <th>Consto compra</th>
                        <th>Costo venta</th>
                        <th>Stock</th>
                        <th>Fecha</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../conexion/conexion.php';

                    $consulta = 'SELECT p.*, pr.empresa  
                        FROM producto p 
                        INNER JOIN proveedor pr
                        ON p.id_proveedor = pr.id_proveedor WHERE p.estado = "activo" ';

                    $res = mysqli_query($con, $consulta);
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>" . $reg['id_producto'] . "</td>";
                        echo "<td>" . $reg['empresa'] . "</td>";
                        echo "<td>" . $reg['nombreproducto'] . "</td>";
                        echo "<td>" . $reg['descripcion'] . "</td>";
                        echo "<td>" . $reg['costocompra'] . "</td>";
                        echo "<td>" . $reg['costoventa'] . "</td>";
                        echo "<td>" . $reg['stock'] . "</td>";
                        echo "<td>" . $reg['fecha'] . "</td>";
                        echo "<td class='text-center'>
                            <a class='btn btn-danger btn-sm'
                             href='eliminarProducto.php?cod=" . $reg['id_producto'] . "'>Eliminar
                            </a>

                            <a class='btn btn-warning btn-sm' 
                            href='editarProducto.php?cod=" . $reg['id_producto'] . " '>
                            Editar
                            </a>

                            </td>";
                        echo "</td>";
                    }
                    ?>
                </tbody>

            </table>
            <div class="text-center mt-5 d-flex justify-content-around">
                <a href="./inactivos.php" class="border border-danger p-2 text-danger">
                    MOSTRAR LISTA DE INACTIVOS
                </a>
                <a href="../fpdf/indexFpdf.php" class="border border-info p-2 text-info">
                    MOSTRAR PDF
                </a>
            </div>

        </div>
              <!-- buscador -->
        <div class="col-12">
              <div>
            <!-- <p class="text-light" align="right">Diseño Web II</p> -->
            <div class="col-12 d-flex no-block align-items-center">
                <div class="ml-auto text-right">
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body nes">
                        <div>
                            <br>
                            <h3 class="text-center text-white font-weight-light">BUSCAR PRODUCTO... </h3>
                        </div>

                        <div class="jumbotron nest" style="margin-bottom:0">

                            <?php
                            $opc = '';
                            echo  "<form action='listarProducto.php?cod=" . $opc . "' method='post'>";
                            ?>
                            <div class="row">
                                <label class="col-sm-2 text-white font-weight-light">Nombre del producto</label>
                                <input type="text" name="nom" class="col-sm-6 form-control" required placeholder="ingrese el nombre">
                                <button type="submit" name="buscar" id="buscar" class="btn btn-primary mx-2" value="buscar">Buscar
                                </button>
                            </div>

                            <br>
                            <br>
                            </form>

                            <?php
                            if (isset($_POST['buscar'])) {
                                $nom = $_POST['nom'];
                                require("../conexion/conexion.php");
                                $consulta = "SELECT*FROM producto pd INNER JOIN proveedor pv
                                  ON pd.id_proveedor=pv.id_proveedor WHERE pd.estado='activo' AND pd.nombreproducto like '$nom%' order by nombreproducto asc";
                                $res = mysqli_query($con, $consulta);

                            ?>


                                <div class="table-responsive">
                                    <table class="table table-primary table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center font-weight-light text-info">ID_Producto</th>
                                                <th class="text-center font-weight-light text-info">ID_Proveedor</th>
                                                <th class="text-center font-weight-light text-info">Nombre</th>
                                                <th class="text-center font-weight-light text-info">Descripcion</th>
                                                <th class="text-center font-weight-light text-info">Costo Compra</th>
                                                <th class="text-center font-weight-light text-info">Costo Venta</th>
                                                <th class="text-center font-weight-light text-info">Stock</th>
                                                <th class="text-center font-weight-light text-info">Fecha</th>
                                                <th class="text-center font-weight-light text-info">Modificar</th>


                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            while ($reg = mysqli_fetch_array($res)) {
                                                echo "<tr>";
                                                echo "<td>" . $reg['id_producto'] . "</td>";
                                                echo "<td>" . $reg['empresa'] . "</td>";
                                                echo "<td>" . $reg['nombreproducto'] . "</td>";
                                                echo "<td>" . $reg['descripcion'] . "</td>";
                                                echo "<td>" . $reg['costocompra'] . "</td>";
                                                echo "<td>" . $reg['costoventa'] . "</td>";
                                                echo "<td>" . $reg['stock'] . "</td>";
                                                echo "<td>" . $reg['fecha'] . "</td>";
                                                echo "<td>
                                                <a href='eliminarProducto.php?cod=" . $reg['id_producto'] . "' class='btn btn-danger'>x</a>

                                                 <a href='editarProducto.php?cod=" . $reg['id_producto'] . " ' class='btn btn-warning'>?</a>
                                                 
                                                 </td>";
                                               
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div><!-- fin del div -->


    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>