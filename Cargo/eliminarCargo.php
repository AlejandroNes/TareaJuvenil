<?php
    include("../conexion/conexion.php");
    $ide=$_GET['cod'];

    $consulta = "UPDATE cargo SET estado = 'inactivo' WHERE id_cargo ='$ide' ";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Inactivo...');
            </script>
        ";
        header('location:./listarCargo.php');
    }else{
        echo "
        <script>
            alert('No se edito ningun registro..');
        </script>
    ";
    }

?>