<?php
    include("../conexion/conexion.php");
    $rs=$_POST['razon'];
    $ni=$_POST['nit'];

    $consulta = "insert into cliente (razonsocial,nit_ci) values ('$rs','$ni')";
    $res=mysqli_query($con,$consulta);
    if($res){
        echo "<script>
            alert('se registro');
            </script>";
            header('location:./listarCliente.php');
    }else{
        echo "No se registro";
    }

?>