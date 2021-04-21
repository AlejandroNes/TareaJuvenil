<?php
require("../conexion/conexion.php");
if(isset($_GET['cod'])){
    $id_proveedor = $_GET['cod'];
    $consulta = "UPDATE proveedor SET estado = 'activo' WHERE id_proveedor ='$id_proveedor'";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Reactivado...');
            </script>
        ";
        header('location:./listarProveedor.php');
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
                            <th>Empresa</th>
                            <th>Contacto</th>
                            <th>E-mail</th>
                            <th>telefono</th>
                            <th>Direccion</th>
                            <th>Foto</th>
                            <th>estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $consulta = "SELECT * FROM proveedor WHERE estado = 'inactivo'";
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>" . $reg['empresa'] . "</td>";
                            echo "<td>" . $reg['contacto'] . "</td>";
                            echo "<td>" . $reg['mail'] . "</td>";
                            echo "<td>" . $reg['telefono'] . "</td>";
                            echo "<td>" . $reg['direccion'] . "</td>";
                            echo "<td> <img width='60px' src='../images/".$reg['logo']."'></td>";
                            echo "<td class='text-center'>
                            <a class='btn btn-info btn-sm'
                             href='inactivos.php?cod=".$reg['id_proveedor']."'>Reactivar
                            </a>
                            </td>";
                            echo "</td>";
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