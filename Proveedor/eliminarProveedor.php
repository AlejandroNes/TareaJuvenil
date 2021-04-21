<?php
    include("../conexion/conexion.php");
    $ide=$_GET['cod'];

    $consulta = "UPDATE proveedor SET estado = 'inactivo' WHERE id_proveedor ='$ide' ";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Inactivo...');
            </script>
        ";
        header('location:./listarProveedor.php');
    }else{
        echo "
        <script>
            alert('No se edito ningun registro..');
        </script>
    ";
    }

?>