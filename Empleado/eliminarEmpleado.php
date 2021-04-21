<?php
    include("../conexion/conexion.php");
    $ide=$_GET['cod'];

    $consulta = "UPDATE empleado SET estado = 'inactivo' WHERE id_empleado ='$ide' ";
    $res = mysqli_query($con, $consulta);
    if($res){
        echo "
            <script>
                alert('Registro Inactivo...');
            </script>
        ";
        header('location:./listarEmpleado.php');
    }else{
        echo "
        <script>
            alert('No se edito ningun registro..');
        </script>
    ";
    }

?>