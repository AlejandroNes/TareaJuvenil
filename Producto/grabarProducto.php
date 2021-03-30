<?php
    include("../conexion/conexion.php");
    $id_proveedor=$_POST['id_proveedor'];
    $nombreproducto=$_POST['nombreproducto'];
    $descripcion=$_POST['descripcion'];
    $costocompra=$_POST['costocompra'];
    $costoventa=$_POST['costoventa'];
    $stock=$_POST['stock'];
    $fecha=$_POST['fecha'];

    $consulta = "INSERT INTO producto (id_proveedor,nombreproducto,descripcion,costocompra,costoventa,stock,fecha) values ($id_proveedor,'$nombreproducto','$descripcion','$costocompra','$costoventa','$stock','$fecha')";
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