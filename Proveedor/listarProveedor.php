<?php include '../HeaderYFooter/header.php';
if(isset($_POST['buscar'])){
    $opc = $_GET['cod'];
}
?>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">

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
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../conexion/conexion.php';
                        $consulta = 'SELECT * FROM proveedor WHERE estado = "activo"';
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
                            <a class='btn btn-danger btn-sm'
                             href='eliminarProveedor.php?cod=".$reg['id_proveedor']."'>Eliminar
                            </a>

                            <a class='btn btn-warning btn-sm' 
                            href='editarProveedor.php?cod=".$reg['id_proveedor']." '>
                            Editar
                            </a>

                            </td>";
                            echo "</td>";
                        }
                        ?>
                    </tbody>
                   
                </table>
                <div class="text-center mt-5">
                       <a href="./inactivos.php" class="border border-danger p-2 text-danger">
                        MOSTRAR LISTA DE PROVEEDORES INACTIVOS
                        </a>
                       </div>

        </div>


        <div class="col-12">
              <!-- buscador -->
              <div>
            <!-- <p class="text-light" align="right">Diseño Web II</p> -->
            <div class="col-12 d-flex no-block align-items-center">
                <div class="ml-auto text-right">
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body nes">
                        <div>
                            <br>
                            <h3 class="text-center text-white font-weight-light">BUSCAR PROVEEDOR... </h3>
                        </div>

                        <div class="jumbotron nest" style="margin-bottom:0">

                            <?php
                            $opc = '';
                            echo  "<form action='listarProveedor.php?cod=" . $opc . "' method='post'>";
                            ?>
                            <div class="row">
                                <label class="col-sm-2 text-white font-weight-light">Nombre del proveedor</label>
                                <input type="text" name="nom" class="col-sm-6 form-control" required placeholder="ingrese el nombre">
                                <button type="submit" name="buscar" id="buscar" class="btn btn-primary mx-2" value="buscar">Buscar
                                </button>
                            </div>

                            <br>
                            <br>
                            </form>

                            <?php
                            if (isset($_POST['buscar'])) {
                                $nom = $_POST['nom'];
                                require("../conexion/conexion.php");
                                $consulta = "SELECT*FROM proveedor  WHERE estado='activo' AND empresa like '$nom%' order by empresa asc";
                                $res = mysqli_query($con, $consulta);

                            ?>


                                <div class="table-responsive">
                                    <table class="table table-primary table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center font-weight-light text-info">id proveedor</th>
                                                <th class="text-center font-weight-light text-info">empresa</th>
                                                <th class="text-center font-weight-light text-info">contacto</th>
                                                <th class="text-center font-weight-light text-info">mail</th>
                                                <th class="text-center font-weight-light text-info">telefono</th>
                                                <th class="text-center font-weight-light text-info">direccion</th>
                                                <th class="text-center font-weight-light text-info">logo</th>
                                                <th class="text-center font-weight-light text-info">estado</th>
                                                <th></th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            while ($reg = mysqli_fetch_array($res)) {
                                                echo "<tr>";
                                                echo "<td>" . $reg['id_proveedor'] . "</td>";
                                                echo "<td>" . $reg['empresa'] . "</td>";
                                                echo "<td>" . $reg['contacto'] . "</td>";
                                                echo "<td>" . $reg['mail'] . "</td>";
                                                echo "<td>" . $reg['telefono'] . "</td>";
                                                echo "<td>" . $reg['direccion'] . "</td>";
                                                echo "<td>" . $reg['logo'] . "</td>";
                                                echo "<td>" . $reg['estado'] . "</td>";
                                                echo "<td>
                                                <a href='eliminarProveedor.php?cod=" . $reg['id_proveedor'] . "' class='btn btn-danger'>x</a>

                                                 <a href='editarProveedor.php?cod=" . $reg['id_proveedor'] . " ' class='btn btn-warning'>?</a>
                                                 
                                                 </td>";
                                               
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div><!-- fin del div -->


    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>