<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Lista de Proveedores</h1>

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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../conexion/conexion.php';

                        $consulta = 'SELECT p.*, pr.empresa  
                        FROM producto p 
                        INNER JOIN proveedor pr
                        ON p.id_proveedor = pr.id_proveedor ';

                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>" . $reg['id_producto'] . "</td>";
                            echo "<td>" . $reg['empresa'] . "</td>";
                            echo "<td>" . $reg['nombreproducto']."</td>";
                            echo "<td>" . $reg['descripcion'] . "</td>";
                            echo "<td>" . $reg['costocompra'] . "</td>";
                            echo "<td>" . $reg['costoventa'] . "</td>";
                            echo "<td>" . $reg['stock'] . "</td>";
                            echo "<td>" . $reg['fecha'] . "</td>";
                            echo "</td>";
                        }
                        ?>
                    </tbody>
                   
                </table>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>