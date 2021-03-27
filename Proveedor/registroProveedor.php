<?php include '../HeaderYFooter/header.php' ?>

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <!-- REGISTRO PROVEEDOR -->
            <h1 class="text-center text-warning font-weight-light py-2">Registro de Proveedores</h1>

            <form class="border border-secondary mt-5 p-3 rounded" enctype="multipart/form-data" method="POST" action="./grabarProveedor.php">
                <div class="form-group">
                    <label class="text-white" for="empresa">Empresa</label>
                    <input name="empresa" type="text" class="form-control" id="empresa">
                </div>

                <div class="form-group">
                    <label class="text-white" for="contacto">Contacto</label>
                    <input name="contacto" type="text" class="form-control" id="contacto">
                </div>

                <div class="form-group">
                    <label class="text-white" for="contacto">Email</label>
                    <input name="mail" type="text" class="form-control" id="mail">
                </div>

                <div class="form-group">
                    <label class="text-white" for="contacto">Telefono</label>
                    <input name="telefono" type="text" class="form-control" id="telefono">
                </div>

                <div class="d-inline-block d-flex justify-content-around">
                    <div class="form-group d-inline-block">
                    <label class="text-white" for="direccion">Dirección</label>
                    <input name="direccion" type="text" class="form-control" id="direccion">
                    </div>

                    <div class="form-group d-inline-block">
                    <label class="text-white" for="imagen">Imagen</label>
                    <input accept="image/*" name="imagen" type="file" class="form-control" id="imagen">
                    </div>
                </div>


                <input class="btn btn-outline-secondary btn-block" type="submit" value="registrar" name="registrar">
            </form>


        </div>
    </div>
</div>

<?php include '../HeaderYFooter/footer.php' ?>