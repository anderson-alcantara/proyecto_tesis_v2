<?php 
session_start();
require_once "conexion.php";
$pdf =$_POST['pdf'];
$nombres=($_POST['nombres']);
$correo=($_POST['correo']);
$tipousuario=$_POST['tipousuario'];
$nombreform=($_POST['nombreform']);
$nombreform_completo=($_POST['nombreform_completo']);
$nombrearchivo=($_POST['nombrearchivo']);
$seccional=($_POST['seccional']);
$fecha=$_POST['fecha'];
$conexion=conexion();
if(buscaRepetido($correo,$nombreform_completo,$conexion)==1){
    echo 2;
}
    else{

        if(!empty($_POST['pdf'])){
   
            $fname =$nombrearchivo.".pdf"; // name the file
            $ruta="formularios_registrados/" .$fname;
            $sql="INSERT into tb_formularios (archivo,nombre,tipo_usuario,formulario,fecha,correo,seccional)
            values ('$ruta','$nombres','$tipousuario','$nombreform_completo','$fecha','$correo','$seccional')";
            $file = fopen("../formularios_registrados/" .$fname, 'w'); 
            fwrite($file,utf8_decode($pdf)); //save data
            fclose($file);
            echo 1;
        } else {
            echo 3;
        }


    }
function buscaRepetido($correo,$nombreform_completo,$conexion){
    $sql="SELECT * from tb_formularios 
        where correo='$correo' and formulario='$nombreform_completo'";
    $result=mysqli_query($conexion,$sql);

    if(mysqli_num_rows($result) > 0){
        
        return 1;
    }else{
        return 0;
    }
}


 ?>