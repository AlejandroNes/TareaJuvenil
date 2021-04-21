<?php
    include("../conexion/conexion.php");
    $id_cargo=$_POST['id_cargo'];
    $cargo=$_POST['cargo'];
    $estado = 'activo';

    $consulta = "insert into cargo (id_cargo,cargo,estado) values ('$id_cargo','$cargo','$estado')";
    $res=mysqli_query($con,$consulta);
    if($res){
        echo "<script>
            alert('se registro');
            </script>";
            header('location:./listarCargo.php');
    }else{
        echo "No se registro";
    }

?>