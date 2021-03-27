<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO CLIENTE -->
            <h1 class="text-center text-info font-weight-light py-2">Registro de Clientes</h1>

            <div class="container">
                <div class="row">
                    <div class="col-8 offset-2">

                        <form class="border border-info mt-5 p-3 rounded" method="POST" action="./grabarCliente.php">
                            <h3 class="text-white text-center">Registro</h3>
                            <div class="form-group">
                                <label class="text-white" for="razon">Razon Social</label>
                                <input name="razon" type="text" class="form-control" id="razon">
                            </div>

                            <div class="form-group">
                                <label class="text-white" for="nit">NIT / CI</label>
                                <input name="nit" type="text" class="form-control" id="nit">
                            </div>

                            <input class="btn btn-info btn-block" type="submit" value="registrar" name="registrar">
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>