<?php 

	require_once "conexion.php";
	$conexion=conexion();
		$tipousuario=$_POST['tipousuario'];
		$usuario=$_POST['correo_electronico'];
		$password=$_POST['password'];
		$nombres=$_POST['nombres'];
		$apellidos=$_POST['apellidos'];
		$documento=$_POST['documento'];
		$seccional=$_POST['seccional'];


		if(isset($_FILES['file'])){
			$archivoadicional=$_FILES['file'];
			$nombreAdicional=($_POST['filename']);
			$fecha=$_POST['fecha'];
			$fileNameadicional=$documento.'_'.$fecha.'_'.$nombreAdicional;

		 
		 }

		 
		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{


			$sql="";

			if(isset($archivoadicional)){
			   $rutan="AdicionalesRegistro/" .$fileNameadicional;
			
			   $sql="INSERT into tb_usuarios (correo_electronico,clave,tipo_usuario,nombres,apellidos,seccional,documento,archivo_adicional)
			   values ('$usuario','$password','$tipousuario','$nombres','$apellidos','$seccional','$documento','$rutan')";
			}else{
				$sql="INSERT into tb_usuarios (correo_electronico,clave,tipo_usuario,nombres,apellidos,seccional,documento)
				values ('$usuario','$password','$tipousuario','$nombres','$apellidos','$seccional','$documento')";
			}

			echo $result=mysqli_query($conexion,$sql);


			if(!empty($_FILES['file'])){
				$rutan="../AdicionalesRegistro/".$fileNameadicional;
				move_uploaded_file( $_FILES['file']['tmp_name'], $rutan);
		  
				
			 }
		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from tb_usuarios 
				where correo_electronico='$user'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				
				return 1;
			}else{
				return 0;
			}
		}

 ?>