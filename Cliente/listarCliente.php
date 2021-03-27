<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <table class="table table-striped table-secondary table-bordered mt-4">
                    <thead class="text-center">
                        <tr class="">
                            <th class="text-info">ID</th>
                            <th class="text-info">RAZON SOCIAL</th>
                            <th class="text-info">NIT / CI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("../conexion/conexion.php");
                        $consulta = "SELECT * FROM cliente";
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<th>" . $reg['id_cliente'] . "</th>";
                            echo "<td>" . $reg['razonsocial'] . "</td>";
                            echo "<td>" . $reg['nit_ci'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>