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
<!-- <script src="js/jquery-3.1.1.min.js"></script>  -->
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
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
    //Inicializar Flexslider
    $('.flexslider').flexslider({
        animation: "slide"
    });

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
<header id="contenedormenu">    
    <div id="cajamenu">     
        <figure id="logo">
            <a href="#home"><img src="imagenes/logo-deltacover.jpg" alt=""></a>
        </figure>   
        <div class="whatsapp-idiomas">
            <div class="whatsapp-cabecera">
                <div class="caja-whatsapp">
                    <a href="#"><i class="icon-whatsapp"></i>+51 992 768 385</a>
                </div>
                <p>Consulta con un especialista</p>
            </div>
            <div class="caja-idiomas">
                <a href="#" class="idioma-activo">ES</a>
                <a href="#">EN</a>
            </div>
        </div>        
    </div>
</header>
<nav id="menu">
    <ul class="megamenu">
        <li><a href="index.php"><i class="icon-home"></i></a></li>
        <li><a href="#">TIPO DE COBERTURAS</a>
            <ul class="dropdown">
                <li><a href="tipos-coberturas-tensionadas.php">Tensionadas</a></li>
                <li><a href="tipos-coberturas-super-domos.php">Domos</a></li>
                <li><a href="tipos-coberturas-deltapracto.php">Deltapracto</a></li>
                <li><a href="tipos-coberturas-deltaspan.php">Deltaspan</a></li>
                <li><a href="tipos-coberturas-deltatent-al-25.php">Deltatent Al 25</a></li>                        
            </ul>                    
        </li>     
        <li><a href="proyectos.php">PROYECTOS</a></li> 
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a href="contactenos.php">CONTÁCTENOS</a></li>
        <li><a href="#" class="cotizar">COTIZAR</a></li>
    </ul>
</nav> 
<!-- ******************************************************************* -->
<!-- *******************      PRESENTACION WEB        ****************** -->
<!-- ******************************************************************* -->
<!-- 
<section id="banner">
    <img src="slide/coberturas-deltacover.jpg" alt="">
</section>
 -->
<div id="banner">
    <div class="flexslider">
        <ul class="slides">     
            <li><a href="#"><img src="slide/coberturas-deltacover.jpg" alt=""></a></li>
            <li><a href="#"><img src="slide/servicios.jpg" alt=""></a></li>
            <li><a href="#"><img src="slide/tipo.cubiertas-tensionadas.jpg" alt=""></a></li>
        </ul>
    </div>
</div>
<!-- ********************************************************************* -->
<!-- ****************************  PROYECTOS  **************************** -->
<!-- ********************************************************************* -->
<section id="proyectos-home">
   <div class="titulo-proyecto-home">
        <h2>Conoce algunos de nuestros</h2>
        <div class="subrayado"></div>
        <h1>PROYECTOS</h1>
   </div>
   <div class="caja-proyectos-home">
       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto1.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto1.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto3.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto3.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto2.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto2.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto4.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto4.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto5.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto5.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto6.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto6.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto7.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto7.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto8.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto8.jpg" alt="" />
       </a>

       <a class="fancybox item-proyecto-home" href="imagenes/proyectos/proyecto9.jpg" data-fancybox-group="gallery" title="">
            <img src="imagenes/proyectos/proyecto9.jpg" alt="" />
       </a>
   </div>
   
</section>
<!-- ******************************************************************* -->
<!-- ********************       VIDEOS HOME         ******************** -->
<!-- ******************************************************************* -->
<section id="videos-home">
    <h1>Mira nuestros videos</h1>
    <div class="caja-videos-home">

        <!-- 
        <div class="project-item-inner">
            <a href="https://www.youtube.com/watch?v=VZvValW-uXY
" class="fancybox-media">
                <img src="imagenes/video1.jpg" alt="">
                <div>
                    <i class="fa fa-play-circle"></i>
                </div>
            </a>                
        </div>
         -->

        <div class="item-video">
            <a href="https://www.youtube.com/watch?v=VZvValW-uXY" class="fancybox-media play"><i class="icon-play"></i></a>
            <img src="imagenes/video1.jpg" alt="">
        </div>
        <div class="item-video">
            <a href="https://www.youtube.com/watch?v=Y8omo_dRzzk" class="fancybox-media play"><i class="icon-play"></i></a>
            <img src="imagenes/video2.jpg" alt="">
        </div>
        <div class="item-video">
            <a href=https://www.youtube.com/watch?v=8rEQNub7efo" class="fancybox-media play"><i class="icon-play"></i></a>
            <img src="imagenes/video3.jpg" alt="">
        </div>
    </div>
</section>
<!-- ******************************************************************* -->
<!-- ***********************       CLIENTES       ********************** -->
<!-- ******************************************************************* -->
<section id="clientes">
    <h1>Empresas que confían en nuestro trabajo</h1>
    <div class="caja-clientes">
        <!--
        ##############################################
            - Normal Image List Carousel / Start -
        ##############################################
        -->
        <div id="normal-image-list-carousel" class="normal-image-list-carousel">
            <div class="item">
                <a href="#"><img src="imagenes/logo-ausa.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/logo-contrans.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/logo-impala.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/logo-komaisu.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/logo-ransa.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/logo-ausa.jpg" alt="" /></a>
            </div>
            <div class="item">
                <a href="#"><img src="imagenes/logo-contrans.jpg" alt="" /></a>
            </div>
        </div>
        <!--
        ############################################
            - Normal Image List Carousel / End -
        ############################################
        -->   
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
    </div>
    <div class="pie-centro">
        <div class="titulo-pie">
            <h3>Contáctanos</h3>
            <div class="subrayado"></div>
        </div>
        <div class="datos-pie">
            <li><i class="icon-facebook"></i>Av. Pedro Miota 910</li>
            <li class="sangria-pie">San Juan de Miraflores, Lima</li>
            <li><i class="icon-whatsapp"></i>+51 992 768 385</li>
            <li><i class="icon-mail"></i>info@cidelsa.com</li>
        </div>
    </div>
    <div class="pie-der">
        <ul class="sociales-pie">
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
            <li><a href="#"><i class="icon-linkedin"></i></a></li>
        </ul>
    </div>
</footer>
<div class="sombra">
    <img src="imagenes/sombra-arriba.jpg" alt="">
</div>
</body>
</html>