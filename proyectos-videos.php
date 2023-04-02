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
<!-- Iconos -->
<link rel="stylesheet" type="text/css" href="css/animation.css">
<link rel="stylesheet" type="text/css" href="css/fontello.css">
<link rel="stylesheet" type="text/css" href="css/fontello-codes.css">
<link rel="stylesheet" type="text/css" href="css/fontello-embedded.css">
<!-- Bootstrap 
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> 
-->
<!-- Jquery -->
<script src="js/jquery-3.1.1.min.js"></script> 
<!-- <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script> -->
<!-- <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>  -->
<!-- jQuery Flexslider 2 -->
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<script src="js/jquery.flexslider.js"></script>
<!-- Fancybox -->
<script type="text/javascript" src="jquery.mousewheel.pack.js?v=3.1.3"></script>
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
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
<script src="https://www.google.com/recaptcha/api.js"></script>
<!-- Fancybox
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript" src="js/jquery.mousewheel.pack.js?v=3.1.3"></script>
<script type="text/javascript" src="source/jquery.fancybox.js"></script> -->
<!-- Animations -->
<link rel="stylesheet" type="text/css" href="assets/css/animations.css">
<script src="assets/js/smoothscroll.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.js"></script>
<script src="assets/js/backbone.js"></script>
<script>
$(document).ready(function(e) {	
    //Inicializar Fancybox
    $('.fancybox').fancybox();  

    //Inicializando Mega Menu
    $(".megamenu").megamenu();  
    //Inicializar Flexslider
    $('.flexslider').flexslider({
        animation: "slide"
    });

    $("#normal-image-list-carousel").flexCarousel({
        breakPoints:[[1900, 5], [1200, 5], [992, 5], [768, 2], [480, 1]],
        pagination:false,
        navigationText:['<i class="icon-left-open"></i>', '<i class="icon-right-open"></i>'],
        navigation:true,
        rewind:false
    });


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
            <h1>NUESTRO TRABAJO</h1>
            <div class="subtitulo-cabecera">
                <h2>REALIZADO CON SEGURIDAD Y CALIDAD</h2>
            </div>
        </div>  
    </div>
    <img src="imagenes/cabecera-proyectos.jpg" alt="">
</div>
<!-- ********************************************************************* -->
<!-- ****************************  PROYECTOS  **************************** -->
<!-- ********************************************************************* -->
<section id="proyectos-home">   
   <div class="caja-proyectos-home">
       <a class="fancybox-media item-proyecto-home" href="https://www.youtube.com/watch?v=VZvValW-uXY" title="">
            <div class="caja-play">
                <i class="icon-youtube-play"></i>
            </div>
            <img src="imagenes/proyectos-videos/almacen-movil-deltaspan.jpg" alt="" />
       </a>
       <a class="fancybox-media item-proyecto-home" href="https://www.youtube.com/watch?v=VZvValW-uXY" title="">
            <div class="caja-play">
                <i class="icon-youtube-play"></i>
            </div>
            <img src="imagenes/proyectos-videos/domo-almacen.jpg" alt="" />
       </a>
       <a class="fancybox-media item-proyecto-home" href="https://www.youtube.com/watch?v=VZvValW-uXY" title="">
            <div class="caja-play">
                <i class="icon-youtube-play"></i>
            </div>
            <img src="imagenes/proyectos-videos/almacen-komatsu.jpg" alt="" />
       </a>
       <a class="fancybox-media item-proyecto-home" href="https://www.youtube.com/watch?v=VZvValW-uXY" title="">
            <div class="caja-play">
                <i class="icon-youtube-play"></i>
            </div>
            <img src="imagenes/proyectos-videos/almacen-komatsu-pucusana.jpg" alt="" />
       </a>
                     
   </div> 
   <a href="proyectos-fotos.php" class="ver-fotos">VER MÁS FOTOS <i class="icon-right-open"></i></a>  
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
</body>
</html>