<?php
    include("../conexion/conexion.php");
    $cargo=$_POST['cargo'];
    $ci=$_POST['ci'];
    $nombre=$_POST['nombre'];
    $paterno=$_POST['paterno'];
    $materno=$_POST['materno'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $fecha_nacimiento=$_POST['fecha_nacimiento'];
    $genero=$_POST['genero'];
    $interes=$_POST['interes'];
    $estado = 'activo';

    $consulta = "INSERT INTO empleado (id_cargo,ci,nombre,paterno,materno,direccion,telefono,fecha_nacimiento,genero,intereses,estado) values ($cargo,'$ci','$nombre','$paterno','$materno','$direccion','$telefono','$fecha_nacimiento','$genero','$interes','$estado')";
    $res=mysqli_query($con,$consulta);
    if($res){
        echo "<script>
            alert('se registro empleado');
            </script>";
            header('location:./listarEmpleado.php');
    }else{
        echo "No se registro";
    }

?>