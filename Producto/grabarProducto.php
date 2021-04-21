<?php
    include("../conexion/conexion.php");
    $id_proveedor=$_POST['id_proveedor'];
    $nombreproducto=$_POST['nombreproducto'];
    $descripcion=$_POST['descripcion'];
    $costocompra=$_POST['costocompra'];
    $costoventa=$_POST['costoventa'];
    $stock=$_POST['stock'];
    $fecha=$_POST['fecha'];
    $estado='activo';

    $consulta = "INSERT INTO producto (id_proveedor,nombreproducto,descripcion,costocompra,costoventa,stock,fecha,estado) values ($id_proveedor,'$nombreproducto','$descripcion','$costocompra','$costoventa','$stock','$fecha','$estado')";
    $res=mysqli_query($con,$consulta);
    if($res){
        echo "<script>
            alert('se registro el producto');
            </script>";
            header('location:./listarProducto.php');
    }else{
        echo "No se registro";
    }

?>