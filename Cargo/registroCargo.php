<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-success font-weight-light py-2">Registro de Cargos</h1>

            <form class="border border-success mt-5 p-3 rounded" method="POST" action="./grabarCargo.php">


                <div class="d-flex justify-content-around">

                        <input name="id_cargo" type="hidden" class="form-control" id="id_cargo">

                    <div class="form-group">
                        <label class="text-white" for="cargo">Cargo</label>
                        <input name="cargo" type="text" class="form-control" id="cargo">
                    </div>
                </div>


                <input class="btn btn-success btn-block" type="submit" value="Agregar Cargo" name="registrar">
            </form>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>