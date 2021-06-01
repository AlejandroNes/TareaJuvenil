<?php
	include("../conexion/conexion.php");
	$em=$_POST['emp']; 
	$us=$_POST['usr'];
	$pa1=$_POST['pas1'];
	$pa2=$_POST['pas2'];
	$ni=$_POST['nivel'];

 	if(strcmp($pa1, $pa2)==0){
		$con1="select * from usuarios where (id_usuario ='$em')";
		$res1=mysqli_query($con,$con1);
		if(mysqli_num_rows($res1)!=0)
		{
				?>
				<script>
					alert('USUARIO YA EXISTE');
                    location.href="registroUsuario.php";
				</script>
			
		<?php
		}
		else
		{
            $sq2="SELECT id_empleado FROM empleado WHERE ci=$em";
			$rs2=mysqli_query($con,$sq2);
            $reg2=mysqli_fetch_array($rs2);
            $idem=$reg2['id_empleado'];
            $pwd1=md5($pa1);
			$q="insert into usuarios (id_usuario,id_empleado,usuario,pasword,nivel,estado) values ('$em','$idem','$us','$pwd1','$ni','activo')";
			$r=mysqli_query($con,$q);
			if ($r)  
			{
					header('location:./listarUsuario.php');
				?>
				<script>
					alert('Se registro su usuario .. FELICICDADES');
				</script>

			<?php
			}
			?>
				<script>
					alert('error');
					location.href="registrousuario.php";
				</script>
			<?php
		}
	}else{
		?>
		
			<script>
					alert('Contraseñas no son iguales');
                    location.href="registrousuario.php";A
			</script>
		<?php
	}

?>