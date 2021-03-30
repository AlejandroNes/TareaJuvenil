<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-3">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-info font-weight-light py-2">Lista de Cargos</h1>

            <table class="table table-hover table-bordered table-success">
                    <thead>
                        <tr>
                            <th>ID - CARGO</th>
                            <th>CARGO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../conexion/conexion.php';
                        $consulta = 'SELECT * FROM cargo';
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>" . $reg['id_cargo'] . "</td>";
                            echo "<td>" . $reg['cargo'] . "</td>";
                            echo "</td>";
                        }
                        ?>
                    </tbody>
                   
                </table>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>