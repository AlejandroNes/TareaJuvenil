<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-info font-weight-light py-2">Lista de Cargos</h1>

            <table class="table table-hover table-bordered table-success">
                <thead>
                    <tr>>
                        <th>CARGO</th>
                        <th>MODIFICAR</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../conexion/conexion.php';
                    $consulta = 'SELECT * FROM cargo WHERE estado = "activo"';
                    $res = mysqli_query($con, $consulta);
                    while ($reg = mysqli_fetch_array($res)) {
                        echo "<tr>";
                        echo "<td>" . $reg['cargo'] . "</td>";
                        echo "<td class='text-center'>
                        
                            <a class='btn btn-danger btn-sm' href='eliminarCargo.php?cod=" . $reg['id_cargo'] . "'>Eliminar</a>

                            <a class='btn btn-warning btn-sm' 
                            href=' editarCargo.php?cod=" . $reg['id_cargo'] . " '>
                            Editar
                            </a>

                            </td>";
                        echo "</tr>";
                        echo "</td>";
                    }
                    ?>
                </tbody>

            </table>

                    
            <div class="text-center mt-5">
                       <a href="./inactivos.php" class="border border-danger p-2 text-danger">
                        MOSTRAR LISTA DE CARGOS INACTIVOS
                        </a>
             </div>
        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>