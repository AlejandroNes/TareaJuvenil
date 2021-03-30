<?php
    include("../conexion/conexion.php");
    $id_cargo=$_POST['id_cargo'];
    $cargo=$_POST['cargo'];

    $consulta = "INSERT INTO cargo (id_cargo,cargo) values ($id_cargo,'$cargo')";
    $res=mysqli_query($con,$consulta);
    if($res){
        echo "<script>
            alert('se registro el cargo');
            </script>";
            header('location:./listarCargo.php');
    }else{
        echo "No se registro";
    }

?>