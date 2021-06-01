<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Lista de Usuarios</h1>

            <table class="table table-striped table-bordered table-secondary">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Nivel</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../conexion/conexion.php';
                        $consulta = 'SELECT * FROM usuarios WHERE estado = "activo"';
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>" . $reg['usuario'] . "</td>";
                            if($reg['nivel'] == 1){
                                echo "<td>" . 'administrador/a' ."</td>";
                            }elseif($reg['nivel'] == 2){
                                echo "<td>" . 'secretario/a' ."</td>";
                            }
                            echo "<td class='text-center'>
                            <a class='btn btn-danger btn-sm'
                             href='eliminarUsuario.php?cod=".$reg['id_empleado']."'>Eliminar
                            </a>

                            <a class='btn btn-warning btn-sm' 
                            href='editarUsuario.php?cod=".$reg['id_empleado']." '>
                            Editar
                            </a>

                            </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                   
                </table>
                <div class="text-center mt-5">
                       <a href="./inactivos.php" class="border border-danger p-2 text-danger">
                        MOSTRAR LISTA DE USUARIOS INACTIVOS
                        </a>
                       </div>

        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>