<?php
require("../conexion/conexion.php");
if(isset($_GET['cod'])){
    $id_empleado = $_GET['cod'];
    $consulta = "UPDATE empleado SET estado = 'activo' WHERE id_empleado ='$id_empleado'";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Reactivado...');
            </script>
        ";
        header('location:./listarEmpleado.php');
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
                        <th>Cargo</th>
                            <th>CI</th>
                            <th>Nombre Completo</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Fecha Nac.</th>
                            <th>Genero</th>
                            <th>Interes</th>
                            <th>estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../conexion/conexion.php';
                        $consulta = "SELECT e.*, c.cargo  
                        FROM empleado e INNER JOIN cargo c ON e.id_cargo = c.id_cargo WHERE e.estado = 'inactivo'";
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                          /*   echo "<td>" . $reg['id_empleado'] . "</td>"; */
                            echo "<td>" . $reg['cargo'] . "</td>";
                            echo "<td>" . $reg['ci'] . "</td>";
                            echo "<td>" . $reg['nombre']. ' ' .$reg['paterno']. ' ' .$reg['materno'] . "</td>";
                            echo "<td>" . $reg['direccion'] . "</td>";
                            echo "<td>" . $reg['telefono'] . "</td>";
                            echo "<td>" . $reg['fecha_nacimiento'] . "</td>";
                            echo "<td>" . $reg['genero'] . "</td>";
                            echo "<td>" . $reg['intereses'] . "</td>";
                            echo "<td class='text-center'>
                            <a class='btn btn-info btn-sm'
                             href='inactivos.php?cod=".$reg['id_empleado']."'>ACTIVAR
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