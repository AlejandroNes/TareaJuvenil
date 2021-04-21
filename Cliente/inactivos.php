<?php
require("../conexion/conexion.php");
if(isset($_GET['cod'])){
    $id_cliente = $_GET['cod'];
    $consulta = "UPDATE cliente SET estado = 'activo' WHERE id_cliente ='$id_cliente'";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Reactivado...');
            </script>
        ";
        header('location:./listarCliente.php');
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
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <table class="table table-hover table-danger table-bordered rounded mt-4">
                    <thead class="text-center">
                        <tr class="">
                            <th class="text-dark">ID</th>
                            <th class="text-dark">RAZON SOCIAL</th>
                            <th class="text-dark">NIT / CI</th>
                            <th class="text-dark">ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $consulta = "SELECT * FROM cliente WHERE estado = 'inactivo'";
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<th>" . $reg['id_cliente'] . "</th>";
                            echo "<td>" . $reg['razonsocial'] . "</td>";
                            echo "<td>" . $reg['nit_ci'] . "</td>";
                            echo "<td class='text-center'>
                            <a class='btn btn-outline-info btn-sm'
                             href='inactivos.php?cod=".$reg['id_cliente']."'>Reactivar Cliente
                            </a>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <div class="text-center mt-5">
                       <a href="./listarCliente.php" class="border border-info p-2 text-info">
                        VOLVER
                        </a>
                       </div>
        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>