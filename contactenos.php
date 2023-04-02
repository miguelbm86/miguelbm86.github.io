<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DELTACOVER</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/estilosweb.css">
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Iconos -->
<link rel="stylesheet" type="text/css" href="css/animation.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
<link rel="stylesheet" type="text/css" href="css/fontello-codes.css">
<link rel="stylesheet" type="text/css" href="css/fontello-embedded.css">
<!-- Jquery -->
<script src="js/jquery-3.1.1.min.js"></script>  
<!-- <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
 -->
<!-- <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>  -->
<!-- jQuery Flexslider 2 -->
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<script src="js/jquery.flexslider.js"></script>
<!-- Mega Menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/megamenu.js"></script>
<!-- Create Flex Carousel 
<script type="text/javascript" src="js/preview.js"></script>
<script type="text/javascript" src="js/jquery.scroll.js"></script>
<script type="text/javascript" src="js/modernizr.custom.30587.js"></script>
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<link rel="stylesheet" type="text/css" href="css/flex-carousel.css" />
<link rel="stylesheet" type="text/css" href="css/flex-carousel-animate.css" />  
<link rel="stylesheet" type="text/css" href="css/flex-carousel-skins.css" />        
<script type="text/javascript" src="js/jquery.flashblue-plugins.js"></script>
<script type="text/javascript" src="js/jquery.flex-carousel.js"></script>
-->
<!-- jQuery Alertify -->
<link rel="stylesheet" type="text/css" href="css/alertify.core.css">
<link rel="stylesheet" type="text/css" href="css/alertify.default.css">
<script src="js/alertify.js"></script>
<!-- Fancybox 
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="js/jquery.mousewheel.pack.js?v=3.1.3"></script>
<script type="text/javascript" src="source/jquery.fancybox.js"></script>
-->
<!-- Animations -->
<link rel="stylesheet" type="text/css" href="assets/css/animations.css">
<script src="assets/js/smoothscroll.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.js"></script>
<script src="assets/js/backbone.js"></script>
<script>
$(document).ready(function(e) { 

    //Inicializando Mega Menu
    $(".megamenu").megamenu();

    /************* Validar Formulario Consultas **************/
    $("#benviar").click(function(){
        var emailreg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
        if ($("#nombres").val() == "") {  
            alertify.error("Debes ingresar tu nombre completo");
            $("#nombres").focus();
            return false;  
        }       
        if ($("#telefono").val() == "") {  
            alertify.error("Debes ingresar tu telefono");
            $("#telefono").focus();
            return false;  
        }
        if ($("#email").val() == "" || !emailreg.test($("#email").val())) {  
            alertify.error("Debes ingresar un e-mail válido");
            $("#email").focus();
            return false;  
        }     
        if ($("#mensaje").val() == "") {
            alertify.error("Debes ingresar tu mensaje");
            $("#mensaje").focus();
            return false;  
        }

        //Validar checkbox
        var acepto = $("#aceptocond").is(":checked");
        if(!acepto){
            alertify.error("Debes aceptar nuestros terminos y condiciones");
            return false;
        }   

        realizarProceso();  

    })

    function realizarProceso(){
        //Serializar campos del formulario
        $("#proceso").val("EnviarComentario");
        var str = $('#fcontacto').serialize();
        $.ajax({
            data    : str,
            url     : 'procesos.php',
            type    : 'post',
            dataType: 'json',
            beforeSend: function(){
                    $('#advertencia').html('<i class="icon-spin6 animate-spin"></i> Procesando, espere por favor...');
            },

            success : function(data){    
                    $("#nombres").val(''); 
                    $("#empresa").val('');
                    $("#telefono").val('');                    
                    $("#email").val('');   
                    $("#mensaje").val('');
                    $("#aceptocond").removeAttr("checked");
                    $('#advertencia').html(data.respuesta);
                    setTimeout(function(){                 
                    $('#advertencia').fadeOut(1000);
                }, 3000); 
            }
        });
    }  

    //Inicializar Fancybox
    $('.fancybox').fancybox();   
   
    //Invocar funciones animaciones
    animaciones();
        
});//Fin document ready
</script>
</head>
<body>
<!-- ******************************************************************* -->
<!-- **********************       MENU WEB         ********************* -->
<!-- ******************************************************************* -->
<?php include "modulos/cabecera.php"; ?>
<!-- ******************************************************************* -->
<!-- *******************      PRESENTACION WEB        ****************** -->
<!-- ******************************************************************* -->
<div id="banner-interno">
    <div class="caja-titulo-cabecera">
        <div class="titulo-cabecera">
            <h1>CONTÁCTENOS</h1>
            <div class="subtitulo-cabecera">
                <h2>Y LO ATENDEREMOS A LA BREVEDAD</h2>
            </div>
        </div>  
    </div>
    <img src="imagenes/cabecera-servicios.jpg" alt="">
</div>
<!-- ******************************************************************* -->
<!-- *********************       FORMULARIO         ******************** -->
<!-- ******************************************************************* -->
<section id="formulario-contacto">
    <div class="botones-oficina-almacenes">                    
        <ul class="nav nav-tabs" role="tablist">            
            <li class="nav-item">                         
                <a class="nav-link active" data-toggle="tab" href="#descripcion" role="tab" aria-selected="true">
                    OFICINA
                </a>                                
            </li>         
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#cuotas" role="tab" aria-selected="false">
                    ALMACENES
                </a>
            </li>                                    
        </ul>
    </div>

    <div class="contenedor-formulario-datos tab-content">
        <div class="tab-pane fade show active" id="descripcion" role="tabpanel">
            <div class="caja-contacto1 tab-content">
                <div class="formulario-izq">
                    <h3>NOS PONDREMOS EN CONTACTO</h3>
                    <h4>ESCRÍBENOS</h4>
                    <form name="fcontacto" action="" method="post" id="fcontacto"> 
                        <div id="unacolums">  
                            <input type="text" name="nombres" id="nombres" placeholder="Nombres:" class="campos">
                            <input type="text" name="empresa" id="empresa" placeholder="Empresa:" class="campos">
                            <input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="campos">
                            <input type="text" name="email" id="email" placeholder="E-mail" class="campos">
                        </div>                           
                        <div id="unacolum">                 
                             <p><textarea name="mensaje" id="mensaje" placeholder="Escribenos tus consultas" class="mensaje"></textarea></p>  
                            <div class="caja-terminos-boton">
                                <div class="terminos">
                                    <div class="checkbox-personalizado">
                                        <input type="checkbox" name="aceptocond" id="aceptocond" value="SI">
                                        <label for="aceptocond" class="cuadro-check"><span></span></label>
                                    </div>
                                    <div class="text-terminos">
                                        Aceptop la <a href="politicas.php" class="fancybox fancybox.iframe" target="_blank">Política de Privacidad</a>
                                    </div>  
                                </div>                
                                <p class="boton-derecha">
                                <input type="button" value="ENVIAR" class="boton" id="benviar">
                                <input type="hidden" name="proceso" id="proceso">
                                </p>
                            </div>
                        </div>   
                        <p id="advertencia"></p>
                    </form>   
                </div> 
                <div class="datos-contacto">
                    <h3>COMUNÍCATE AL</h3>
                    <h1>ÁREA TÉNICA<br>Y COMERCINAL</h1>
                    <div class="linea-datos"></div>
                    <a href="#">992 768 385</a>
                    <p>Lun. a Vie.: 8:00 am - 1:00 pm<br>
                    2:00 pm - 18:15 pm</p>
                </div> 
            </div>      
        </div>   
        <!-- ******************************************************************* -->
        <!-- ******************************************************************* -->
        <div class="tab-pane fade" id="cuotas" role="tabpanel">
            <div class="caja-contacto2 tab-content">
                <div class="formulario-izq">
                    <h3>NOS PONDREMOS EN CONTACTO</h3>
                    <h4>ESCRÍBENOS</h4>
                    <div class="datos-almacenes">
                        <h2>LIMA</h2>
                        <h5>Dirección</h5>
                        <p>Av. Pedro Miota 910 San Juan de Miraflores, Lima</p>
                        <h5>Horario de Atención:</h5>
                        <p>Lun. a Vie.: 8:00 am - 13:00 y 14:00 - 18:15 Sáb: 8:00 a 11:00</p>
                    </div>
                    <div class="datos-almacenes">
                        <h2>LIMA</h2>
                        <h5>Dirección</h5>
                        <p>Av. Pedro Miota 910 San Juan de Miraflores, Lima</p>
                        <h5>Horario de Atención:</h5>
                        <p>Lun. a Vie.: 8:00 am - 13:00 y 14:00 - 18:15 Sáb: 8:00 a 11:00</p>
                    </div>
                </div> 
                <div class="datos-contacto">
                    <h3>COMUNÍCATE AL</h3>
                    <h1>ÁREA DE ALMACENES</h1>
                    <div class="linea-datos"></div>
                    <a href="#">992 768 385</a>
                    <p>Lun. a Vie.: 8:00 am - 1:00 pm<br>
                    2:00 pm - 18:15 pm</p>
                </div>       
            </div>
        </div>        
    </div>
</section>
<section id="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.3233917454263!2d-76.98190878536379!3d-12.158372391393023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b8444c437d47%3A0xcd7d84fe9b4770b9!2sAv%20Pedro%20Miotta%20910%2C%20Lima%2015801!5e0!3m2!1ses!2spe!4v1672354829667!5m2!1ses!2spe" style="border:0;" class="mapa"></iframe>
</section>
<!-- ******************************************************************* -->
<!-- *********************       PIE PAGINA         ******************** -->
<!-- ******************************************************************* -->
<footer id="piepagina">
    <div class="pie-izq">
        <div class="logo-pie">
            <img src="imagenes/logo-deltacover.jpg" alt="">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Eaque nam aperiam maxime tenetur illo ipsa? Odit, eius provident atque ipsam deleniti cumque est accusantium tempore repellendus sed sapiente nesciunt quam?</p> 
    </div>
    <div class="pie-centro">
        <div class="caja-titulos-pie">
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <h3>CONTÁCTANOS</h3>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
        </div>
        <div class="datos-pie">
            <a href="https://api.whatsapp.com/send?phone=51992768385" target="_blank"><i class="icon-whatsapp"></i>+51 992 768 385</a>
            <a href="mailto:coreo@dominio.com" target="_blank"><i class="icon-mail"></i>coreo@dominio.com</a>
            <a href="https://goo.gl/maps/Lak3MsjJPBA7PjZp8" target="_blank">
                <i class="icon-location-outline"></i>Av. Pedro Miota 910<br>
                <div class="sangria-pie"></div>San Juan de Miraflores, Lima
            </a>            
        </div>
        <div class="caja-sociales">
            <ul class="sociales-pie">
                <li><a href="https://web.facebook.com/cidelsaoficial/?ref=hl&_rdc=1&_rdr" target="_blank"><i class="icon-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/@cidelsa" target="_blank"><i class="icon-youtube-play"></i></a></li>
                <li><a href="https://www.linkedin.com/authwall?trk=qf&original_referer=&sessionRedirect=https%3A%2F%2Fpe.linkedin.com%2Fcompany%2Fcomercial-industrial-delta-s-a-" target="_blank"><i class="icon-linkedin"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="pie-der">
        <div class="caja-titulos-pie">
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <h3>MAPA DEL SITIO</h3>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
        </div>
        <ul class="menu-pie">
            <li><a href="#"><i class="icon-right-open"></i>Inicio</a></li>
            <li><a href="#"><i class="icon-right-open"></i>Tipos de coberturas</a></li>
            <li><a href="#"><i class="icon-right-open"></i>Proyectos</a></li>
            <li><a href="#"><i class="icon-right-open"></i>Servicios</a></li>
            <li><a href="#"><i class="icon-right-open"></i>Contáctenos</a></li>
            <li><a href="#"><i class="icon-right-open"></i>Cotizar</a></li>
        </ul>   
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
</body>
</html>