<?php
include '../conexion/conexion.php';

$em = $_POST['empresa'];
$co = $_POST['contacto'];
$ma = $_POST['mail'];
$te = $_POST['telefono'];
$di = $_POST['direccion'];
$a = $_FILES['imagen']['name'];
$estado = 'activo';
$consulta = "INSERT INTO proveedor (empresa,contacto,mail,telefono,direccion,logo,estado)
VALUES('$em','$co','$ma','$te','$di','$a','$estado')";

$res = mysqli_query($con, $consulta);

if($res){
    echo "<script>
    alert('se registro');
    </script>";
    header('location:./listarProveedor.php');
}else{
    echo 'No se registro';
}

?>