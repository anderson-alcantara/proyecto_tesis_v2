<?php 
session_start();
require_once "conexion.php";
$pdf =$_POST['pdf'];
$nombres=utf8_decode($_POST['nombres']);
$correo=utf8_decode($_POST['correo']);
$tipousuario=$_POST['tipousuario'];
$nombreform=utf8_decode($_POST['nombreform']);
$nombreform_completo=utf8_decode($_POST['nombreform_completo']);
$nombrearchivo=utf8_decode($_POST['nombrearchivo']);
$fecha=$_POST['fecha'];
   if(!empty($_POST['pdf'])){
    $conexion=conexion();
    $fname =$nombrearchivo.".pdf"; // name the file
    $ruta="../formularios_registrados/" .$fname;
    $sql="INSERT into tb_formularios (archivo,nombre,tipo_usuario,formulario,fecha,correo)
    values ('$ruta','$nombres','$tipousuario','$nombreform_completo','$fecha','$correo')";
echo $result=mysqli_query($conexion,$sql);
    $file = fopen("../formularios_registrados/" .$fname, 'w'); 
    fwrite($file,utf8_decode($pdf)); //save data
    fclose($file);
} else {
    echo "No Data Sent";
}




 ?>