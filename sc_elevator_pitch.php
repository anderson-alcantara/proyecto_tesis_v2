<!DOCTYPE html>
<html lang="es">
   <!-- Basic -->
   <head>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>CEIDEUL</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
      <link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- Pogo Slider CSS -->
      <link rel="stylesheet" href="css/pogo-slider.min.css" />
      <!-- Site CSS -->
      <link rel="stylesheet" href="css/style copy.css" />
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- Custom CSS -->
      <link rel="stylesheet" href="css/custom.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <?php
 session_start();
 if(!isset($_SESSION['user'])){
	 header("Location:index.php");
	 exit(); 
 }
?>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <!-- <div id="preloader">
         <div class="loader">
            <img src="images/loader.gif" alt="#" />
         </div>
      </div> -->
      <!-- END LOADER -->
      <div class="wrapper">
      <nav id="sidebar">


      <li><a onclick="volverinicio()" style="cursor:pointer;">Inicio</a></li>
      <ul class="nav__list">
         <li>
              <input id="group-1er" type="checkbox" hidden />
              <label for="group-1er"><span class="fa fa-angle-right"></span>Sobre CEIDEUL</label>
              <ul class="group-list">
              <li style="background-color:#353535;"><a href="sc_catedra_emprendimieto.php">Cátedra de emprendimiento</a></li>
              <li style="background-color:#353535;"><a href="sc_elevator_pitch.php">Elevator Pitch</a></li>
              <li style="background-color:#353535;"><a href="sc_feria_empresarial.php">Feria empresarial</a></li>
              <li style="background-color:#353535;"><a href="sc_opcion_grado.php">Opción de grado creación de empresa</a></li>
              <li style="background-color:#353535;"><a href="sc_proyeccion_social.php">Proyección social</a></li>
              <li style="background-color:#353535;"><a href="sc_consultorio.php">Consultorio</a></li>
              <li style="background-color:#353535;"><a href="sc_asesoria.php">Asesoría</a></li>
              <li style="background-color:#353535;"><a href="sc_extension.php">Extensión</a></li>
              <li style="background-color:#353535;"><a href="sc_cluster.php">Clúster Fami-Pyme</a></li>
                <li>
                </li>
              </ul>
      <li><a href="ver_comentarios.php">Notificaciones</a></li>
         <ul class="nav__list">
         <li>
              <input id="group-1" type="checkbox" hidden />
              <label for="group-1"><span class="fa fa-angle-right"></span>Mi perfil</label>
              <ul class="group-list">
              <li style="background-color:#353535;"><a href="Editar_Perfil.php">Editar Perfil</a></li>
                <li><a href="index.php" style="background-color:#353535;">Cerrar sesión</a></li>
                <li>
                </li>
              </ul>
            </li>

               
    
          <li>
            <input id="group-2" type="checkbox" hidden  />
            <label for="group-2"><span class="fa fa-angle-right"></span>Formularios</label>
            <ul class="group-list">
              <li>
                <input id="sub-group-2" type="checkbox" hidden onclick="onhandleformularios('sub-group-2')" />
                <label for="sub-group-2" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Asesoría y Consultoría</label>
                <ul class="sub-group-list">

                  <li>
                     
                    <input id="sub-sub-group-2" type="checkbox" hidden />
                    <label for="sub-sub-group-2"><span class="fa fa-angle-right"></span>asesoría y consultoría empresarial</label>
                    <ul class="sub-sub-group-list" style="font-size: 12px;">
                      <li><a href="forms/f_diagAsesoria.php" target="_blank">Formato De Diagnostico Para Asesoría Empresarial</a></li>
                      <li><a href="forms/f_inicioAsesoriaEmp.html" target="_blank">Formato De Inicio De Asesoría Empresarial</a></li>
                      <li><a href="forms/f_EntregaAsesoria.html" target="_blank">Formato De Entrega De Asesoría</a></li>
                    </ul>
                  </li>
                  <li>
                     
                     <input id="sub-sub-group-3" type="checkbox" hidden />
                     <label for="sub-sub-group-3"><span class="fa fa-angle-right"></span>herramientas para la asesoría y consultoría empresarial</label>
                  <ul class="sub-sub-group-list" style="font-size: 12px;">
                       <li><a href="forms/f_DiagAppOfimatica.html" target="_blank">Formato De Diagnostico De Aplicaciones Ofimaticas E Informatica</a></li>
                       <li><a href="forms/f_AnalisisDisePtrabajo.html" target="_blank">Formato De Análisis Para El Diseño De Puestos De Trabajo</a></li>
                       <li><a href="forms/f_perfilacion.php" target="_blank">Formato De Perfilación De Puestos De Trabajo</a></li>
                       <li><a href="forms/f_analisis" target="_blank">Formato De análisis Del Entorno</a></li>
                       <li><a href="forms/f_balance.html" target="_blank">Formato De Balance Scorecard</a></li>
                       <li><a href="">Formato De Identificación De Mercado</a></li>
                       <li><a href="forms/f_ishikawa.html" target="_blank">Formato De Diagrama De Ishikawa / Espina De Pescado</a></li>
                       <li><a href="#">Formato De Caracterización De Procesos</a></li>
                       <li><a href="#">Formato De Evaluación De Marco Estratégico</a></li>
                       <li><a href="#">Formato De Diagnostico Interno</a></li>
                       <li><a href="#">Formato De Matriz Dofa</a></li>
                       <li><a href="#">Formato De Cadena De Valor</a></li>
                       <li><a href="#">Formato De Modelo Canvas</a></li>
                       <li><a href="#">Formato De Solicitud De Acciones Preventivas Y De Mejora</a></li>
                     </ul>
                   </li>
                </ul>

                


                <input id="sub-group-3" type="checkbox" hidden onclick="onhandleformularios('sub-group-3')" />
                <label for="sub-group-3" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Opción de Grado</label>
                <ul class="sub-group-list">

                  <li>
                     
                    <input id="sub-sub-group-4" type="checkbox" hidden />
                    <label for="sub-sub-group-4"><span class="fa fa-angle-right"></span>Opciones De Grado CEIDEUL</label>
                    <ul class="sub-sub-group-list" style="font-size: 12px;">
                      <li><a href="#">Formato De Inscripción Para Opción De Grado Creación De Empresa</a></li>
                      <li><a href="#">Formato De Recurso Estudiante / Externo</a></li>
       
                    </ul>
                    <input id="sub-sub-group-5" type="checkbox" hidden />
                    <label for="sub-sub-group-5"><span class="fa fa-angle-right"></span>Opciones De Grado Creación De Empresa</label>
                    <ul class="sub-sub-group-list" style="font-size: 12px;">
                      <li><a href="#">Formato De Asignación De Tutor Para Proyecto De Grado</a></li>
                      <li><a href="#">Formato De Evaluación Proyecto De Grado “creación De Empresa”</a></li>

                    </ul>
                  </li>
                </ul>


                <input id="sub-group-6" type="checkbox" hidden onclick="onhandleformularios('sub-group-6')" />
                <label for="sub-group-6" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Cátedra De emprendimiento</label>
                <ul class="sub-group-list">
                  <li style="margin-bottom: 10px;"><a href="forms/f_compromiso">Formato De Compromiso a La Catedra De Emprendimiento</a></li>

                  



                  
                  <input id="sub-sub-group-8" type="checkbox" hidden />
                  <label for="sub-sub-group-8"><span class="fa fa-angle-right"></span>Ideas De Negocio</label>
                  <ul class="sub-sub-group-list" style="font-size: 12px;">
                    <li><a href="#">Formato Cátedra De Emprendimiento- Ideas De Negocio</a></li>
                  </ul>
                     
                  <input id="sub-sub-group-7" type="checkbox" hidden />
                  <label for="sub-sub-group-7"><span class="fa fa-angle-right"></span>Elevator Pitch</label>
                  <ul class="sub-sub-group-list" style="font-size: 12px;">
                    <li><a href="#">Formato De Banco De Ideas De Negocio</a></li>
                  </ul>

                </ul>

                



                <input id="sub-group-8" type="checkbox" hidden onclick="onhandleformularios('sub-group-8')"/>
                <label for="sub-group-8" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Feria Empresarial</label>
                <ul class="sub-group-list">
                  <li><a href="#">Formato Inscripción Feria Empresarial</a></li>
                  <li><a href="#">Formato Protocolo Expositores Feria Empresarial</a></li>
                  <li><a href="#">Formato De Inventario Feria Empresarial</a></li>
                  <li>
                     
                    <input id="sub-sub-group-9" type="checkbox" hidden />
                    <label for="sub-sub-group-9"><span class="fa fa-angle-right"></span>Evaluación Empresarial</label>
                    <ul class="sub-sub-group-list" style="font-size: 12px;">
                      <li><a href="#">Formato De Evaluación Feria Empresarial</a></li>
                      <li><a href="#">Formato De Satisfacción Del Expositor</a></li>
                    </ul>
                  </li>
                </ul>



                <input id="sub-group-10" type="checkbox" hidden onclick="onhandleformularios('sub-group-10')"/>
                <label for="sub-group-10" style="background-color: #aa1a1a6c;"><span class="fa fa-angle-right"></span> Práctica Empresarial</label>
                <ul class="sub-group-list">
                  <li><a href="#">Formato De Inicio De Practica Empresarial</a></li>
                  <li><a href="#">Formato De Concepto Docente Experto Disciplinar Práctica Empresarial</a></li>
                  <li><a href="#">Formato De Entrega Final De Trabajo De Práctica Empresarial</a></li>
                  <li><a href="#">Formato De Evaluación Entrega Final Practica Empresarial</a></li>

                </ul>








              </li>
            </ul>
          </li>

      </nav>
      <div id="content">


         <iframe src="forms/form_inicio.html" id="frameforms" width="100%" height="100%" hidden></iframe>
         <!-- Start header -->
         <header class="top-header" style="background-color: white;">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a onclick="volverinicio()" style="cursor:pointer;"><img src="images/ceideul_logo.png" style="width: 310px; height: 130px;" /></a>
                     </div>
                  </div>

                  
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn" style="margin-top: 80px;"><img src="images/menu_icon.png"></button>
                     <p style="margin-top: 80px; font-weight: bold; color: #aa1a1a;" id="txtnombre"></p>
                  </div>

               </div>
               
            </div>
         </header>
         <!-- End header -->
         <!-- Start Banner -->
         
         <!-- End Banner -->
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">

                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full">
                        
                        </div>

                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     
                  </div>
               </div>

               
            </div>
         </div>
      
         <!-- OTRA SECCION-->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row" style="margin-bottom: -150px;">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">

                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full">
                        
                     
                     
                      </div>
                  </div>
               </div>

               
           
         </div>
      </div>
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><br>Elevator Pitch</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <p style="text-align: justify;
                         text-justify: inter-word;">Es la culminación del proceso de la Cátedra de Emprendimiento donde se evalúan y se valoran las diferentes ideas de negocio que se han ido creando en el transcurso de la cátedra.</p>
                     </div>
                  </div>
               </div>
               <br>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       <img class="img-responsive" style="border-radius: 40px; width: 500px; height: 500px;" src="images/space-5000696_1280.png" alt="#" />
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <!-- end section -->
         <!-- Start Footer -->
         <footer class="footer-box" >
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Centro de Emprendimiento, Innovación y Desarrollo Empresarial de la Universidad Libre (CEIDEUL)</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row" >
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts"  >
                     <div class="full footer_blog f_icon_1">
                         <p>Dirección<br><small>Carrera 70 No. 53-40<br>Bogotá, Colombia</small></p>
                     </div>
                  </div>

               <div class="col-lg-3 col-md-6 col-sm-6 white_fonts"> 
                     <div class="full footer_blog f_icon_2">
                        <p>Teléfono<br><small>423 27 00<br>Ext. 1812</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>E-mail<br><small>ceideul@unilibre.edu.co</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Derechos de autor</p>
                         <p><small>
                           Copyright © 2020 Unilibre Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación</small>
                         </p>
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">Universidad Libre</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/rutinas.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
                  function onhandleformularios(idformulario){

            var ids=["sub-group-2","sub-group-3","sub-group-6","sub-group-8","sub-group-10"];


            $.each(ids, function( index, value ) {

              if(value!==idformulario){
               $("#"+value).prop("checked", false);
               debugger
              }  
            
            });

           
         }
      </script>
<script>
document.getElementById("txtnombre").innerHTML = '<?php echo $_SESSION['nombres'].' '.$_SESSION['apellidos']; ?>';
function volverinicio(){
   var tipo='<?php echo $_SESSION['tipo_usuario']?>';
   if(tipo=="Estudiante"){
      window.location="home_Estudiante.php";
   }else if(tipo=="Egresado"){
      window.location="home_Egresado.php";
   }else if(tipo=="Docente"){
      window.location="home_Docente.php";
   }else if(tipo=="Externo"){
      window.location="home_Externo.php";
}
}

 </script>  
   </body>
</html>
