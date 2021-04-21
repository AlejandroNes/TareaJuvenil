<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Lista de Empleados</h1>

            <table class="table table-striped table-bordered table-info w-100">
                    <thead>
                        <tr>
               <!--              <th>id Empleado</th> -->
                            <th>Cargo</th>
                            <th>CI</th>
                            <th>Nombre Completo</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Fecha Nac.</th>
                            <th>Genero</th>
                            <th>Interes</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../conexion/conexion.php';
                        $consulta = "SELECT e.*, c.cargo  
                        FROM empleado e INNER JOIN cargo c ON e.id_cargo = c.id_cargo WHERE e.estado = 'activo'";
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
                            <a class='btn btn-danger btn-sm'
                             href='eliminarEmpleado.php?cod=".$reg['id_empleado']."'>x
                            </a>

                            <a class='btn btn-warning btn-sm' 
                            href='editarEmpleado.php?cod=".$reg['id_empleado']."'>
                            ?
                            </a>

                            </td>";
                            echo "</td>";
                        }
                        ?>
                    </tbody>
                   
                </table>
                <div class="text-center mt-5">
                       <a href="./inactivos.php" class="border border-danger p-2 text-danger">
                        MOSTRAR LISTA DE INACTIVOS
                        </a>
                       </div>

        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>