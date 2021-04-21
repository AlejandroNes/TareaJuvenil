<?php
    include("../conexion/conexion.php");
    $ide=$_GET['cod'];

    $consulta = "UPDATE producto SET estado = 'inactivo' WHERE id_producto ='$ide' ";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Inactivo...');
            </script>
        ";
        header('location:./listarProducto.php');
    }else{
        echo "
        <script>
            alert('No se edito ningun registro..');
        </script>
    ";
    }

?>