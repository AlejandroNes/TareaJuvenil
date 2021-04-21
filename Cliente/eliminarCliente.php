<?php
    include("../conexion/conexion.php");
    $ide=$_GET['cod'];

    $consulta = "UPDATE cliente SET estado = 'inactivo' WHERE id_cliente ='$ide' ";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Inactivo...');
            </script>
        ";
        header('location:./listarCliente.php');
    }else{
        echo "
        <script>
            alert('No se edito ningun registro..');
        </script>
    ";
    }

?>