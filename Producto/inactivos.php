<?php
require("../conexion/conexion.php");
if(isset($_GET['cod'])){
    $id_producto = $_GET['cod'];
    $consulta = "UPDATE producto SET estado = 'activo' WHERE id_producto ='$id_producto'";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Reactivado...');
            </script>
        ";
        header('location:./listarProducto.php');
    }else{
        echo "
        <script>
            alert('No se activo el registro..');
        </script>
    ";
    } 
}
?>
<?php include '../HeaderYFooter/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-12">

            <!-- REGISTRO CLIENTE -->
            <table class="table table-hover table-danger table-bordered rounded mt-4">
                    <thead class="text-center">
                        <tr class="">
                            <th>ID prod</th>
                            <th>Empresa</th>
                            <th>Nombre Producto</th>
                            <th>Descripcion</th>
                            <th>Consto compra</th>
                            <th>Costo venta</th>
                            <th>Stock</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $consulta = 'SELECT p.*, pr.empresa  
                        FROM producto p 
                        INNER JOIN proveedor pr
                        ON p.id_proveedor = pr.id_proveedor WHERE p.estado = "inactivo" ';

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
                            echo "<td class='text-center'>
                            <a class='btn btn-info btn-sm'
                             href='inactivos.php?cod=".$reg['id_producto']."'>reactivar
                            </a>
                            </td>";
                            echo "</td>";
                        }
                        ?>
                    </tbody>
                </table>

                <div class="text-center mt-5">
                       <a href="./listarProducto.php" class="border border-info p-2 text-info">
                        VOLVER
                        </a>
                       </div>
        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>