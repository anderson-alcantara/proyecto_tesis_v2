<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/styleform.css">
  <title>Document</title>
</head>
<body>

<form class="form" id="form1" action="./" method="POST">
<div id="pag1">
  <!--Titulo princiapl-->
<div class="form__title"><a id="nombre_form">FORMATO DE PERFILACIÓN DE PUESTOS DE TRABAJO</a></div>
<p style="color: red;">FOR-AC-006</p>
<hr>

  <!--label&textarea-->
<div class="form__item">
  <label for="givennames" class="form__label">Dirección de correo electrónico </label>
  <input type="email" class="form__input" name="" value="sdefsdf" id="" placeholder="tu dirección de correo electrónico" autocomplete="off">
  <br>
</div>
<hr>

<!--label&input-date-->
<div class="form__item">
  <label for="" class="form__label">FECHA </label>
  <input type="date" class="form__input form__input--small" name="" id="" placeholder="tu respuesta">

  
  <br>
</div>
<hr>

<!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">RAZÓN SOCIAL DE LA EMPRESA </label>
    <input type="text" class="form__input" name="" id="razonsocial" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">NOMBRE DEL EMPRESARIO / REPRESENTANTE LEGAL </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">DIRECCIÓN EMPRESA </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">LOCALIDAD - BARRIO </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">TELÉFONO DE CONTACTO </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">No. DE CONTRATO DE LA ASESORÍA </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>
  

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">PUESTO DE TRABAJO </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>
  <div class="form__item">
    <label for="givennames" class="form__label">DENOMINACIÓN DEL PUESTO DE TRABAJO</label>
    <hr style="height:0px; visibility:hidden;"/>
    <div class="grupordbuttons">
    <input type="radio" autocomplete="off" 
    name="puesto" value="DIRECTIVO">DIRECTIVO
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="puesto" value="JURIDICO">JURIDICO
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="puesto" value="PROFESIONAL">PROFESIONAL
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="puesto" value="TÉCNICO">TÉCNICO
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="puesto" value="ASISTENCIAL">ASISTENCIAL
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="puesto" value="OPERARIO">OPERARIO

    <hr style="height:0px; visibility:hidden;"/>

  </div> 

  </div>
<hr>

<!--label&radio-->
<div class="form__item">
    <label for="givennames" class="form__label">FUNCIONES DEL PUESTO DE TRABAJO </label>
    <hr style="height:0px; visibility:hidden;"/>
    <div class="grupordbuttons">
    <input type="radio" autocomplete="off" 
    name="fpuesto" value="ADMINISTRACIÓN">ADMINISTRACIÓN
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="COMERCIAL / SERVICIO AL CLIENTE">COMERCIAL / SERVICIO AL CLIENTE
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="CALIDAD">CALIDAD
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="LOGÍSTICA">LOGÍSTICA
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="PRODUCCIÓN">PRODUCCIÓN
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="MERCADEO">MERCADEO
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="CONTABILIDAD">CONTABILIDAD
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="RRHH">RRHH
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="MANTENIMIENTO">MANTENIMIENTO
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="COMPRAS">COMPRAS
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="TECNOLOGÍA">TECNOLOGÍA
    <hr style="height:0px; visibility:hidden;"/>
    <input type="radio" autocomplete="off"
    name="fpuesto" value="Otro:">Otro:
    <hr style="height:0px; visibility:hidden;"/>
    <input type="text" class="form__input" name="givennames" id="givennames" placeholder="tu respuesta" autocomplete="off">
    </div>

    <br><br>
  </div>
<hr>


<!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">ENUMERE LAS RESPONSABILIDADES DEL PUESTO DE TRABAJO</label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label-->
<div class="form__item">
    <label for="givennames" class="form__label2">POSICIÓN DEL PUESTO EN EL ORGANIGRAMA</label>
    <br>
</div>
<hr>

<!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">SUBORDINACIÓN (Indique si este puesto de trabajo tiene subordinados y cuáles) </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

<!--label&textarea-->
  <div class="form__item">
    <label for="givennames" class="form__label">SUPERVISIÓN (Indique si este puesto esta bajo supervisión y de qué cargos) </label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">COMUNICACIONES COLATERALES (Indique los pares con los cuales debe manejar comunicación directa)</label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">APTItu respuesta</label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label-->
<div class="form__item">
    <label for="givennames" class="form__label2">CONDICIONALES DEL PUESTO</label>
    <br>
</div>
<hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">HORAS MENSUALES</label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">HORAS SEMANALES</label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

  <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">HORAS DIARIAS</label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
  </div>
  <hr>

    <!--label&textarea-->
<div class="form__item">
    <label for="givennames" class="form__label">HORARIO LABORAL</label>
    <input type="text" class="form__input" name="" id="" placeholder="tu respuesta" autocomplete="off">

    <br>
    </div>


  <!--botón enviar-->
  <div class="form__item">
    <button class="form__btn__green" type="button" onclick="Ongeneratepdf()">Enviar</button>
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

function addrespuesta(){

  $(".form__item").each(function(){
    var elem2 = document.createElement('label');
    elem2.style.color="red";

    var that=$(this);
    var children=that.children();
$.each(children,function(index,value){

if($(this).get(0).tagName=="DIV"){

  var hijosrdbutton=$(this).children();

$.each(hijosrdbutton,function(index,value){
  if($(this).get(0).tagName=="INPUT"){
    var tipo=($(this).prop('type'));
    console.log(tipo);
    switch(tipo){
      case "radio":
      if($(this).is(':checked')){
        var valor=$(this).val();
        debugger
        if(valor=="Otro:"){
          $.each(hijosrdbutton,function(index,value){

            if($(this).get(0).tagName=="INPUT"){
              var tipo=($(this).prop('type'));
              if(tipo=="text"){
                valor=$(this).val();
                console.log(valor);
                elem2.innerHTML = valor; 

              }
            }

          })
        }
elem2.innerHTML = valor; 
      that.append(elem2);
      
      }
      break;
    }



  }
  
});
}
  if($(this).get(0).tagName=="INPUT"){
    var tipo=($(this).prop('type'));
    switch(tipo){
      case "text":
      case "email":
      case "date":
      case "radio":
var valor=$(this).val();
elem2.innerHTML = valor; 
      that.append(elem2);
      break;
    }



  }
});
    

    
        //traigo todos los radio button
});



}


function valueInput(){
  $("form#form1 :input[type=text]").each(function(){
   var input= $(this);
 var inputid = input.attr('id');
 if(inputid.includes("rbgroup")){
var grupo=inputid.split("_");
var valorseleccioando=$("input[name=" + grupo[1] + "]:checked").val();
input.val(valorseleccioando);
input.removeAttr('hidden');
 } 
});
}
  function Ongeneratepdf(){
    addrespuesta();
invisibleradio();
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
var correo='<?php echo $_SESSION['user']?>'
var tipousuario='<?php echo $_SESSION['tipo_usuario']?>';
var nombreform="f-perfilacion";
var nombreform_completo=$("#nombre_form").text();
var d=new Date();
var mes=d.getMonth()+1
var fecha=d.getDate()+" "+mes+" "+d.getFullYear()+"_"+d.getHours()+"-"+d.getMinutes()+"-"+d.getSeconds();
var nombrearchivo=fecha+"_"+nombres+"_"+nombreform;
cadena="pdf=" + pdf +
					"&nombres=" + nombres +
					"&correo=" + correo+
					"&tipousuario=" +tipousuario+
          "&nombreform=" +nombreform+
          "&nombreform_completo=" +nombreform_completo+
          "&nombrearchivo=" +nombrearchivo+
					"&fecha=" +fecha;
debugger
$.ajax({
						type:"POST",
						url:"../php/subir_form.php",
						data:cadena,
						success:function(r){
                
            }						
					});
    
//     window.scrollTo(0,0);     
// html2canvas(document.getElementById("pag1")).then(function(canvas){
//   var imgData = canvas.toDataURL('image/png');
//    var imgWidth = 210; 
//    var imgHeight = canvas.height * imgWidth / canvas.width; 
//  var position = 10;
//  var doc = new jsPDF('p', 'mm');
//   doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
//   doc.save( 'file.pdf');
// })
//     var container = document.body; // full page 
// 			html2canvas(container).then(function(canvas) {
//         var imgData = canvas.toDataURL('image/png');
// var imgWidth = 210; 
// var pageHeight = 295;  
// var imgHeight = canvas.height * imgWidth / canvas.width;

// var heightLeft = imgHeight;
// debugger
// var doc = new jsPDF('p', 'mm');
// var position = 10; // give some top padding to first page

// doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
// heightLeft -= pageHeight;

// while (heightLeft >= 0) {
//   position += heightLeft - imgHeight; // top padding for other pages
//   doc.addPage();
//   doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
//   heightLeft -= pageHeight;
// }
// doc.save( 'file.pdf');
//             });









//     var container = document.body; // full page 
// 			html2canvas(container).then(function(canvas) {
//         var imgData = canvas.toDataURL('image/png');
// var imgWidth = 210; 
// var pageHeight = 295;  
// var imgHeight = canvas.height * imgWidth / canvas.width;

// var heightLeft = imgHeight;
// debugger
// var doc = new jsPDF('p', 'mm');
// var position = 10; // give some top padding to first page

// doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
// heightLeft -= pageHeight;

// while (heightLeft >= 0) {
//   position += heightLeft - imgHeight; // top padding for other pages
//   doc.addPage();
//   doc.addImage(imgData, 'PNG', 0, position, imgWidth, imgHeight);
//   heightLeft -= pageHeight;
// }
// doc.save( 'file.pdf');
//             });


  }
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="../js/html2canvas.min.js"></script>
  <script src="../js/jspdf.debug.js"></script>
  <script src="../js/canvas2image.min.js"></script>
</html>