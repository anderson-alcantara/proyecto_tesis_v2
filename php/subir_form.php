<?php 
session_start();
require_once "conexion.php";
$pdf =$_POST['pdf'];
$nombres=($_POST['nombres']);
$correo=($_POST['correo']);
$nombres=($_POST['nombres']);
$correo=($_POST['correo']);
$tipousuario=$_POST['tipousuario'];
$nombreform=($_POST['nombreform']);
$nombreform_completo=($_POST['nombreform_completo']);
$nombrearchivo=($_POST['nombrearchivo']);
$nombreform=($_POST['nombreform']);
$nombrearchivo=($_POST['nombrearchivo']);
$seccional=($_POST['seccional']);
$fecha=$_POST['fecha'];
$conexion=conexion();



$sql1="SELECT * from tb_formularios 
where correo='$correo' and formulario='$nombreform_completo'";
$resultado=mysqli_query($conexion,$sql1);
$retorno=0;
if(mysqli_num_rows($resultado) > 0){
   $retorno=2;
   echo 2;
}else{
$retorno=1;
}
if($retorno==1){
   if(!empty($_POST['pdf'])){

      $fname =$nombrearchivo.".pdf"; // name the file
      $ruta="../formularios_registrados/" .$fname;
      $ruta="formularios_registrados/" .$fname;
      $sql="INSERT into tb_formularios (archivo,nombre,tipo_usuario,formulario,fecha,correo,seccional)
      values ('$ruta','$nombres','$tipousuario','$nombreform_completo','$fecha','$correo','$seccional')";
   echo $result=mysqli_query($conexion,$sql);
   $file = fopen("../formularios_registrados/" .$fname, 'w'); 
   fwrite($file,utf8_decode($pdf)); //save data
   fclose($file);
     }
}




 ?>