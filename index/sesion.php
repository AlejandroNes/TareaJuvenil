<?php
include '../conexion/conexion.php';
session_start();
if(isset($_POST['submit'])){
$us = $_POST['usuario'];
$pw = $_POST['password'];
$pw1 = md5($pw);
$errores = '';

$consulta = "SELECT * FROM usuarios WHERE usuario = '$us' AND pasword = '$pw1' ";

$res = mysqli_query($con, $consulta);
if(mysqli_num_rows($res) != 0 ){

    $_SESSION['ingreso'] = 'si';
    if($reg = mysqli_fetch_array($res)){
        $_SESSION['id_empleado'] = $reg['id_empleado'];
        $_SESSION['usuario'] = $reg['usuario'];
        $_SESSION['nivel'] = $reg['nivel'];     
    }
    header('location:principal.php');
}else{
    $errores .= 'Ingrese los datos correctamente';
}

}
?>