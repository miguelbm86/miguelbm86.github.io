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
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

<!-- <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>  -->
<!-- jQuery Flexslider 2 -->
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<script src="js/jquery.flexslider.js"></script>
<!-- Mega Menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/megamenu.js"></script>
<!-- Create Flex Carousel -->
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
<!-- Animate 
<link rel="stylesheet" href="css/animate.css">
-->
<!-- jQuery Alertify -->
<link rel="stylesheet" type="text/css" href="css/alertify.core.css">
<link rel="stylesheet" type="text/css" href="css/alertify.default.css">
<script src="js/alertify.js"></script>
<!-- Fancybox -->
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="js/jquery.mousewheel.pack.js?v=3.1.3"></script>
<script type="text/javascript" src="source/jquery.fancybox.js"></script>
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

    $('.fancybox-media')
    .attr('rel', 'media-gallery')
    .fancybox({
        openEffect : 'none',
        closeEffect : 'none',
        prevEffect : 'none',
        nextEffect : 'none',

        arrows : false,
        helpers : {
            media : {},
            buttons : {}
        }
    }); 
          
    $("#normal-image-list-carousel").flexCarousel({
        breakPoints:[[1900, 5], [1200, 5], [992, 5], [768, 2], [480, 1]],
        pagination:false,
        navigationText:['<i class="icon-left-open"></i>', '<i class="icon-right-open"></i>'],
        navigation:true,
        rewind:false
    });
    
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
            <h1>LIMPIEZA Y MANTENIMIENTO</h1>
            <div class="subtitulo-cabecera">
                <h2>CONSERVA LAS PROPIEDADES DEL MATERIAL</h2>
            </div>
        </div>  
    </div>
    <img src="imagenes/cabecera-servicios.jpg" alt="">
</div>
<!-- ********************************************************************* -->
<!-- ************************  CUERPO  *********************** -->
<!-- ********************************************************************* -->
<section id="limpieza-mantenimiento">   
   <div class="caja-limpieza">       
       <div class="texto-serv">
            <h1>LIMPIEZA Y MANTENIMIENTO</h1>
            <div class="caja-titulos-servicios">
                <h1>DE CUBIERTAS</h1>
                <div class="cuadrados sin-cuadrados"></div>
                <div class="cuadrados sin-cuadrados"></div>
                <div class="cuadrados sin-cuadrados"></div>           
            </div>
            <p>Como todos los materiales de alta performance, las membranas Cidelsa conservan sus propiedades si se siguen las instrucciones descritas para su mantenimiento<br><br>
            Nuestro trabajo realizado con seguridad y calidad.
            </p> 
       </div>
       <div class="foto-serv">
           <img src="imagenes/servicios/33registro-aereo-chancay.jpg" alt="">
       </div>
   </div>
</section>
<!-- ******************************************************************* -->
<!-- ***********************       CLIENTES       ********************** -->
<!-- ******************************************************************* -->
<section id="clientes">
    <h1>CONFÍAN EN NOSOTROS</h1>
    <div class="caja-titulos-clientes">
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <h1>NUESTROS CLIENTES</h1>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
    </div>
    <div class="caja-clientes">
        <!--
        ##############################################
            - Normal Image List Carousel / Start -
        ##############################################
        -->
        <div id="normal-image-list-carousel" class="normal-image-list-carousel">
            <div class="item">
                <a href="#"><img src="imagenes/clientes/logo-ausa.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/clientes/logo-contrans.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/clientes/logo-impala.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/clientes/logo-komaisu.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/clientes/logo-ransa.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/clientes/logo-ausa.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/clientes/logo-contrans.jpg" alt="" /></a>
            </div>
        </div>
        <!--
        ############################################
            - Normal Image List Carousel / End -
        ############################################
        -->   
    </div>
</section>
<!-- ******************************************************************* -->
<!-- *********************       FORMULARIO         ******************** -->
<!-- ******************************************************************* -->
<section id="formulario-serv">
    <div class="caja-formulario">
        <div class="formulario-derecha">
            <h1>COMENTANOS TUS DUDAS E</h1>
            <div class="caja-titulos-contacto">
                <div class="cuadrados sin-cuadrados"></div>
                <div class="cuadrados sin-cuadrados"></div>
                <div class="cuadrados sin-cuadrados"></div>
                <h1>INICIEMOS UN PROYECTO</h1>
                <div class="cuadrados sin-cuadrados"></div>
                <div class="cuadrados sin-cuadrados"></div>
                <div class="cuadrados sin-cuadrados"></div>
            </div>
            <form name="fcontacto" action="" method="post" id="fcontacto"> 
                <div id="doscolums">  
                    <input type="text" name="nombres" id="nombres" placeholder="Nombres:" class="campos">
                    <input type="text" name="empresa" id="empresa" placeholder="Empresa:" class="campos">
                </div> 
                <div id="doscolums">  
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
                            <div class="text-terminos terminos2">
                                Aceptop la <a href="politicas.php" class="fancybox fancybox.iframe" target="_blank">Política de Privacidad</a>
                            </div>  
                        </div>  
                        <p class="boton-derecha">
                            <input type="button" value="ENVIAR" class="boton" id="benviar">
                            <input type="hidden" name="proceso" id="proceso">
                        </p>

                    </div>
                </div>   
                <p id="advertencia advertencia2"></p>
            </form>
        </div>
    </div>
</section>
<!-- ******************************************************************* -->
<!-- *********************       PIE PAGINA         ******************** -->
<!-- ******************************************************************* -->
<?php include "modulos/pie-pagina.php"; ?>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="validator.js"></script>
<script src="contact.js"></script>
<!-- countTo -->
<script type="text/javascript" src="js/jquery-countTo.js"></script>
<!-- main jQuery 
<script src="js/vendor/jquery-1.11.1.min.js"></script>-->
<!-- jquery.nav -->
<script src="js/jquery.nav.js"></script>        
<!-- theme custom scripts -->
<script src="js/main.js"></script>
<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
<!-- Create Flex Carousel -->
<script type="text/javascript" src="js/preview.js"></script>
<script type="text/javascript" src="js/jquery.scroll.js"></script>
<script type="text/javascript" src="js/modernizr.custom.30587.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery.flashblue-plugins.js"></script>
<script type="text/javascript" src="js/jquery.flex-carousel.js"></script>
</body>
</html>