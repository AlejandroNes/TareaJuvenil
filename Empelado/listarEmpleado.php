<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Lista de Proveedores</h1>

            <table class="table table-striped table-bordered table-secondary">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Contacto</th>
                            <th>E-mail</th>
                            <th>telefono</th>
                            <th>Direccion</th>
                            <th>Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../conexion/conexion.php';
                        $consulta = 'SELECT * FROM proveedor';
                        $res = mysqli_query($con, $consulta);
                        while ($reg = mysqli_fetch_array($res)) {
                            echo "<tr>";
                            echo "<td>" . $reg['empresa'] . "</td>";
                            echo "<td>" . $reg['contacto'] . "</td>";
                            echo "<td>" . $reg['mail'] . "</td>";
                            echo "<td>" . $reg['telefono'] . "</td>";
                            echo "<td>" . $reg['direccion'] . "</td>";
                            echo "<td> <img width='60px' src='../images/".$reg['logo']."'></td>";
                            echo "</td>";
                        }
                        ?>
                    </tbody>
                   
                </table>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>