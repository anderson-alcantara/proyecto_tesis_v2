<!DOCTYPE html>
<?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header("Location:../index.php");
	 exit(); 
 }
?>
<html lang="es">
<head>
<style>
  .required:after {
    content:" *";
    color: red;
  }
</style>
<link rel="shortcut icon" href="../images/ulibre_logo.png" />
<link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="../js/alertifyjs/css/alertify.css">
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<script src="../js/alertifyjs/alertify.js"></script>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/styleform2.css">
  <title>CEIDEUL</title>
</head>
<body>
<p></p>
<form class="form" id="form1" action="./" method="POST">
<div id="pag1">
  <!--Titulo princiapl-->
  <div style="">
<div class="form__title" style="font-weight:bold; font-size:25px"><a id="nombre_form">FORMATO DE DIAGNÓSTICO INTERNO</a></div>
<p style="color: red;">FOR-AC-013</p>
</div>
<hr style="color:red; background-color:red;">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="txtnombre" class="required">Nombre</label>
      <input type="text" class="form-control" id="txtnombre" placeholder="Email" required disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="txtcorreo" class="required">Email</label>
      <input type="text" class="form-control" id="txtcorreo" placeholder="" required disabled>
    </div>
  </div>

<hr>
  <!--label&textarea-->

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">FECHA</label>
      <input type="date" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">RAZÓN SOCIAL DE LA EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">NOMBRE DEL EMPRESARIO / REPRESENTANTE LEGAL</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">DIRECCIÓN EMPRESA</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">LOCALIDAD - BARRIO</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="required">TELÉFONO DE CONTACTO</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="inputEmail4" class="required">No. DE CONTRATO DE LA ASESORÍA</label>
      <input type="number" class="form-control" id="inputEmail4" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class=""></label>
    </div>
  </div>

<hr>

<h5>DIAGNÓSTICO INTERNO</h5>
<h6>A continuación, evalúe las capacidades de la empresa, marque con una X en los espacios que corresponda. Indique a que corresponde (FORTALEZA O DEBILIDAD) y el impacto que representa.</h6>
<hr>

<h5>1. CAPACIDAD DIRECTIVA</h5>
<hr>



<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">IMAGEN CORPORATIVA</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">REALIZACIONES DE PLANES ESTRATÉGICOS</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>



<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CAPACIDAD DE RESPUESTA A LOS CAMBIOS</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">CAPACIDAD DE TOMA DE DECISIONES </label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>




<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">EVALUACIÓN DE LA GESTIÓN</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class=""> </label>
    </div>
  </div>

<hr>

<h5>2. CAPACIDAD COMPETITIVA</h5>
<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GRADO DE LEALTAD DE LOS CLIENTES</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">REALIZACIÓN DE INVESTIGACIÓN Y DESARROLLO  </label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>



<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">PORTAFOLIO DE PRODUCTOS</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">SEGUIMIENTO A LOS CLIENTES (CRM)</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">VALOR AGREGADO</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class=""></label>
    </div>
  </div>

<hr>
<h5>CAPACIDAD FINANCIERA</h5>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">TIENE FÁCIL ACCESO AL CAPITAL REQUERIDO</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">RENTABILIDAD</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CAPACIDAD PARA SATISFACER LA DEMANDA</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">CAPACIDAD PARA COMPETIR EN PRECIOS</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>
<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">ESTABILIDAD EN LOS COSTOS</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class=""> </label>
    </div>
  </div>

<hr>


<h5>CAPACIDAD TECNOLÓGICA</h5>
<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">HABILIDADES TÉCNICAS</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">EQUIPOS TECNOLÓGICOS</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>


<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">CAPACIDAD DE INNOVACIÓN</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">PATENTES Y LICENCIAS</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">GRADO DE APLICACIÓN DE E-COMMERCE</label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class=""> </label>

    </div>
  </div>

<hr>


<h5>CAPACIDAD DE TALENTO HUMANO</h5>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">AUSENTISMO </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">CAPACIDAD DE MOTIVACIÓN</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>

<div class="form-row">
<div class="form-group col-md-6">
      <label for="exampleFormControlSelect1" class="required">NIVEL DE ACCIDENTALIDAD </label>
      <select class="form-control" id="exampleFormControlSelect1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      </select>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" hidden required>
    </div>
    <div class="form-group col-md-6">
      <label for="selectconotro1" class="required">PROCESO DE RECLUTAMIENTO DISEÑADO Y ESTRUCTURADO</label>
      <select class="form-control" id="selectconotro1" required>
      <option></option>
      <option>FORTALEZA ALTO</option>
      <option>FORTALEZA MEDIO</option>
      <option>FORTALEZA BAJO</option>
      <option>DEBILIDADES ALTO</option>
      <option>DEBILIDADES MEDIO</option>
      <option>DEBILIDADES BAJO</option>
      
      <input type="text" class="form-control" id="inputEmail4" name="otro" hidden required >
    </div>
  </div>

<hr>
<div class="form-row">
  <div class="form-group col-md-6">
      <label for="inputEmail4" class="">REALIZADO POR:</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="">REVISADO POR:</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="" >
    </div>
  </div>

<hr>




  <!--botón enviar-->
  <div class="form__item">
    <button class="btn btn-success" type="button" id="botonenviar">Enviar</button>
  </div>
</form>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../js/FileSaver.js"></script>
<script src="../js/jquery.wordexport.js"></script>
<script>
 function invisibleradio(){
  $(".grupordbuttons").each(function(){
 $(this).remove(); //traigo todos los radio button
});
 }



 function verificarvacio(){

var retorno=true;
  $(".form-row").each(function(){

var dentrorow=$(this).children();
$.each(dentrorow,function(index,value){

  if($(this).get(0).tagName=="DIV"){
    var columna=$(this).children();
    $.each(columna,function(index,value){
     

    var tipocontrol=$(this).get(0).tagName;
  
   
switch(tipocontrol){
case "INPUT":
case "SELECT":
case "TEXTAREA":
var valor=$(this).val();
if(valor=="" && $(this).is(":visible") && $(this).prop('required')){
  $(this).css({"border": "2px solid red", "border-radius": "4px"});
  retorno= false;
}else{

  $(this).css({"border": "", "border-radius": ""});
}
break;
}
    })




  }
  
})


});
return retorno;
}




function addrespuesta(){

  $(".form-row").each(function(){

var dentrorow=$(this).children();
$.each(dentrorow,function(index,value){

  if($(this).get(0).tagName=="DIV"){
    var columna=$(this).children();
    $.each(columna,function(index,value){
      var that=$(this);

    var tipocontrol=$(this).get(0).tagName;
  
   
switch(tipocontrol){
 case "INPUT":
 case "SELECT":
case "TEXTAREA":
debugger
  var elem2 = document.createElement('label');
    elem2.style.color="red";
    elem2.style.whiteSpace="pre-wrap";
  var tipo=($(this).prop('type'));
var valor=$(this).val();
 var valorspace= valor.replace(/(\r\n|\n|\r)/gm, "<br />");
elem2.innerHTML = valorspace; 
      that.append(elem2);
break;
}
    })




  }
  
})


});
}




  </script>
<script>

$(document).ready(function(){
    $("select").change(function(){
        var selected = $(this).children("option:selected").val();
        
        if(selected=="Otro:"){
         $(this).closest('div').find("input").attr("hidden",false); 
         $(this).closest('div').find("input").val("");

         
        }else{

          $(this).closest('div').find("input").attr("hidden",true); 
          $(this).closest('div').find("input").val(selected);
        }


    });
});

</script>
<script>

$('#txtnombre').val('<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>');
$('#txtcorreo').val('<?php echo $_SESSION['user']; ?>');
document.getElementById("botonenviar").addEventListener ("click", Ongeneratepdf, false);






  function Ongeneratepdf(){
    if(verificarvacio()==true){
      addrespuesta();
      var doc = new jsPDF();
var elementHTML = document.body;
var specialElementHandlers = {
    '#elementH': function (element, renderer) {
        return true;
    }
};
doc.fromHTML(elementHTML, 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
});

// Save the PDF
var pdf =doc.output();
var nombres='<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
var correo='<?php echo $_SESSION['user']?>';
var tipousuario='<?php echo $_SESSION['tipo_usuario']?>';
var nombreform=filenamesinpunto;
var nombreform_completo=$("#nombre_form").text();
var d=new Date();
var mes=d.getMonth()+1
var fecha=d.getDate()+" "+mes+" "+d.getFullYear()+"_"+d.getHours()+"-"+d.getMinutes()+"-"+d.getSeconds();
var nombrearchivo=fecha+"_"+nombres+"_"+nombreform;
var seccional='<?php echo $_SESSION['seccional']?>';
cadena="pdf=" + pdf +
					"&nombres=" + nombres +
					"&correo=" + correo+
					"&tipousuario=" +tipousuario+
          "&nombreform=" +nombreform+
          "&nombreform_completo=" +nombreform_completo+
          "&nombrearchivo=" +nombrearchivo+
					"&fecha=" +fecha+
          "&seccional=" +seccional;
console.log(cadena);
$.ajax({
						type:"POST",
						url:"../php/subir_form.php",
						data:cadena,
						success:function(r){
                if(r==1){
                  alertify.alert('Formulario enviado con éxito').set('onok', function(closeEvent){ 
                    window.close();

									} ).setHeader('<em>  </em> '); 

                }else if(r==2){
                  alertify.alert('Este formulario ya fué registrado por el usuario').setHeader('<em>  </em> '); 
                }else if(r==3){
                  alertify.alert('error en conexión').setHeader('<em>  </em> '); 
                }
            }						
					});
    
    }else{
      alert('Por favor llenar todos los campos obligatorios'); 
    }

  }

</script>
<script>
var loc = window.location.pathname;


var index = loc.lastIndexOf("/") + 1;
var filename = loc.slice(index);
var filenamesinpunto= filename.substr(0, filename.indexOf('.')); 

</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../js/html2canvas.min.js"></script>
  <script src="../js/jspdf.debug.js"></script>
  <script src="../js/docx.js"></script>

  <script src="../js/canvas2image.min.js"></script>
</html>