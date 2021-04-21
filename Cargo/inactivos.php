<?php
require("../conexion/conexion.php");
if(isset($_GET['cod'])){
    $id_cargo = $_GET['cod'];
    $consulta = "UPDATE cargo SET estado = 'activo' WHERE id_cargo ='$id_cargo'";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Reactivado...');
            </script>
        ";
        header('location:./listarCargo.php');
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
                            <th class="text-dark">ID CARGO</th>
                            <th class="text-dark">CARGO</th>
                            <th class="text-dark">ESTADO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        $consulta = "SELECT * FROM cargo WHERE estado = 'inactivo'";
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<th>" . $reg['id_cargo'] . "</th>";
                            echo "<td>" . $reg['cargo'] . "</td>";
                            echo "<td class='text-center'>
                            <a class='btn btn-outline-info btn-sm'
                             href='inactivos.php?cod=".$reg['id_cargo']."'>Reactivar cargo
                            </a>
                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <div class="text-center mt-5">
                       <a href="./listarCargo.php" class="border border-info p-2 text-info">
                        VOLVER
                        </a>
                       </div>
        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>