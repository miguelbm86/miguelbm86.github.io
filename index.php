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

    $(".portfolio-carousel").flexCarousel({
        breakPosints:[[1200, 4], [992, 3], [768, 2], [480, 1]],
        pagination:true,
        //navigationText:['<i class="icon-left-open"></i>', '<i class=" icon-right-open"></i>'],
        navigation:false
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
            <a href="index.php"><img src="imagenes/logo-deltacover.jpg" alt=""></a>
        </figure>   
        <div class="whatsapp-idiomas">
            <div class="whatsapp-cabecera">
                <div class="caja-whatsapp">
                    <a href="https://api.whatsapp.com/send?phone=51992768385" target="_blank"><i class="icon-whatsapp"></i>+51 992 768 385</a>
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
        <li><a href="index.php"><i class="icon-home-1"></i></a></li>
        <li><a href="#">TIPO DE COBERTURAS</a>
            <ul class="dropdown">
                <li><a href="tipos-coberturas-deltaspan.php">Deltaspan</a></li>
                <li><a href="tipos-coberturas-deltapracto.php">Deltapracto</a></li>
                <li><a href="tipos-coberturas-deltatent-al-25.php">Deltatent Al 25</a></li>
                <li><a href="tipos-coberturas-encapsulado.php">Encapsulado</a></li>
                <li><a href="tipos-coberturas-espaciales.php">Espaciales</a></li>
            </ul>                    
        </li>     
        <li><a href="#">PROYECTOS</a>
            <ul class="dropdown">
                <li><a href="proyectos-fotos.php">Fotos</a></li>
                <li><a href="proyectos-videos.php">Videos</a></li>            
            </ul> 
        </li> 
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a href="contactenos.php">CONTÁCTENOS</a></li>
        <li><a href="#" class="cotizar">COTIZAR</a></li>
    </ul>
</nav> 
<?php include "modulos/cabecera.php"; ?>
<!-- ******************************************************************* -->
<!-- *******************      PRESENTACION WEB        ****************** -->
<!-- ******************************************************************* -->
<div id="banner">
    <div class="flexslider">
        <ul class="slides">     
            <li><a href="#"><img src="slide/coberturas-deltacover1.jpg" alt=""></a></li>
            <li><a href="#"><img src="slide/coberturas-deltacover2.jpg" alt=""></a></li>
            
        </ul>
    </div>
</div>
<!-- ********************************************************************* -->
<!-- ************************  TIPOS DE COVERTURA  *********************** -->
<!-- ********************************************************************* -->
<section id="tipos-coberturas">    
    <h1>TIPOS DE</h1>
    <div class="caja-titulos">
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <h1>COBERTURAS INDUSTRIALES</h1>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
    </div>    
    <div class="caja-tipos-coverturas">
        <div class="tipos">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/icono-deltaspan.jpg" alt="">
            </div>
            <p>Deltaspan</p>
            <a href="tipos-coberturas-deltaspan.php">Saber más</a>
        </div>
        <div class="tipos">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/icono-delta-practo.jpg" alt="">
            </div>
            <p>DeltaPracto</p>
            <a href="tipos-coberturas-deltapracto.php">Saber más</a>
        </div>        
        <div class="tipos">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/icono-encapsulado.jpg" alt="">
            </div>
            <p>Encapsulado</p>
            <a href="tipos-coberturas-encapsulado.php">Saber más</a>
        </div>
        <div class="tipos">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/icono-deltatent.jpg" alt="">
            </div>
            <p>Deltatent AI</p>
            <a href="tipos-coberturas-deltatent-al-25.php">Saber más</a>
        </div>
        <div class="tipos">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/icono-tensionada.jpg" alt="">
            </div>
            <p>Tensionadas</p>
            <a href="tipos-coberturas-especiales.php#tensionadas">Saber más</a>
        </div>
        <div class="tipos">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/icono-domo.jpg" alt="">
            </div>
            <p>Domos</p>
            <a href="tipos-coberturas-especiales.php#domos">Saber más</a>
        </div>        
    </div>
</section>
<!-- ********************************************************************* -->
<!-- *********************  BENEFICIOS DE FLEXILONA  ********************* -->
<!-- ********************************************************************* -->
<section id="beneficios">
    <h1>BENEFICIOS DE CONSTRUIR</h1>
    <div class="caja-titulos-beneficios">
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <h1>CON FLEXILONA</h1>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
    </div>
    <div class="caja-beneficios">
        <div class="item-beneficio">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/luz-natural.jpg" alt="">
            </div>
            <h3>Luz Natural</h3>
            <p>Se mantiene fresco en verano y cálido en invierno. Reduce costo de energía eléctrica.</p>
        </div> 
        <div class="item-beneficio">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/resistencia-a-corrosion.jpg" alt="">
            </div>
            <h3>Resistencia a la corrosión</h3>
            <p>Resistente a la sal, fertilizantes, lodo, compost, otros materiales.</p>
        </div> 
        <div class="item-beneficio">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/fuerza-superior.jpg" alt="">
            </div>
            <h3>Fuerza Superior</h3>
            <p>Nuestros almacenes pueden ser diseñados para soportar fuertes vientos, nieve y actividad sísmica.</p>
        </div> 
        <div class="item-beneficio">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/instalacion.jpg" alt="">
            </div>
            <h3>Instalación y Mantenimiento</h3>
            <p>Nuestro sistema de estructura metálica que permite un montaje más rápido con mantenimiento mínimo.</p>
        </div> 
        <div class="item-beneficio">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/adaptable.jpg" alt="">
            </div>
            <h3>Totalmente Adaptable</h3>
            <p>Permite grandes luces, altura de columnas variables y lugares remotos.</p>
        </div> 
        <div class="item-beneficio">
            <div class="icono-coberturas">
                <img src="imagenes/tipos-coberturas/reubicable.jpg" alt="">
            </div>
            <h3>Reubicable</h3>
            <p>Están diseñados para ser permanentes, pero pueden ser fácilmente transportados o reubicados.</p>
        </div> 
    </div>
    <a href="#" class="boton-brochure">BROCHURE DE PROYECTOS <i class="icon-download"></i></a>
</section>
<!-- ********************************************************************* -->
<!-- ****************************  NOSOTROS  ***************************** -->
<!-- ********************************************************************* -->
<section id="nosotros">
    <div class="imagen-nosotros">
        <!-- <img src="imagenes/nosotros.jpg" alt=""> -->
    </div>
    <div class="texto-nosotros">
        <div class="caja-titulos-nosotros">
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <h1>SOMOS FABRICANTES</h1>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
            <div class="cuadrados sin-cuadrados"></div>
        </div> 
        <p>Esta línea de negocio está orientada al diseño, desarrollo y ejecución de cubiertas con flexilonas®.<br><br>
        Nuestra ilimitada gama de diseños y soluciones, nos ha permitido revolucionar el concepto de coberturas en Latinoamérica; muestra de esta contribución son los reconocimientos a la innovación, excelencia en el diseño y fabricación que otorgara el IFAI, asociación mundial de la industria textil, a varios de nuestros proyectos.</p>  
    </div>
</section>
<!-- ********************************************************************* -->
<!-- ************************  IMAGEN DE FONDO  ************************** -->
<!-- ********************************************************************* -->
<section id="cidelsa">
    <div class="logo-cidelsa">
        <img src="imagenes/logo-cidelsa.jpg" alt="">
    </div>
</section>
<!-- ******************************************************************* -->
<!-- ********************       VIDEOS HOME         ******************** -->
<!-- ******************************************************************* -->
<section id="proyectos-home">
    <div class="caja-titulos-proyectos">
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <h1>NUESTROS PROYECTOS</h1>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
        <div class="cuadrados sin-cuadrados"></div>
    </div> 
    <div class="caja-videos-home">
        
        <div class="portfolio-carousel">
            <div class="item">
                <div class="caja-item">
                    <div class="caja-morado-video">
                        <h4>Almacén móvil Deltaspan</h4>                     
                    </div>
                    <img src="imagenes/proyectos-videos/almacen-movil-deltaspan.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="https://www.youtube.com/watch?v=VZvValW-uXY" class="video-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="item">
                <div class="caja-item">
                    <div class="caja-morado-video">
                        <h4>Domo - Cementos Pacasmayo</h4>                     
                    </div>
                    <img src="imagenes/proyectos-videos/domo-almacen.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="https://www.youtube.com/watch?v=Y8omo_dRzzk" class="video-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="item">
                <div class="caja-item">
                    <div class="caja-morado-video">
                        <h4>Almacén Komatsu</h4>                     
                    </div>
                    <img src="imagenes/proyectos-videos/almacen-komatsu.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="https://www.youtube.com/watch?v=8rEQNub7efo" class="video-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>                
            </div>
            
            <div class="item">
                <div class="media-holder caja-item">
                    <div class="caja-morado-video">
                        <h4>Almacén Komatsu Mitsui</h4>                     
                    </div>
                    <img src="imagenes/proyectos-videos/almacen-komatsu-pucusana.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="https://www.youtube.com/watch?v=PPl6hG9-1S4&feature=youtu.be" class="img-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>                
            </div>            
        </div>
        
               
        <!-- 
        <div class="portfolio-carousel">
            <div class="item">
                <div class="media-holder">
                    <img src="imagenes/proyectos/proyecto1.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="imagenes/proyectos/proyecto1.jpg" class="img-link"><i class="icon-search"></i></a>
                        </div>
                    </div>
                </div>
                <div class="detail-container">
                    <h4><a href="#">Animup</a></h4>
                    <p>Branding / Web</p>
                </div>
            </div>
            <div class="item">
                <div class="media-holder">
                    <img src="imagenes/proyectos/proyecto2.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="imagenes/proyectos/proyecto2.jpg" class="video-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="detail-container">
                    <h4><a href="#">Axel</a></h4>
                    <p>
                        Branding
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="media-holder">
                    <img src="imagenes/proyectos/proyecto3.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="imagenes/proyectos/proyecto3.jpg" class="video-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="detail-container">
                    <h4><a href="#">Coco Ville</a></h4>
                    <p>
                        Graphic / Package
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="media-holder">
                    <img src="imagenes/proyectos/proyecto4.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="imagenes/proyectos/proyecto4.jpg" class="img-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="detail-container">
                    <h4><a href="#">JJ Royal</a></h4>
                    <p>
                        Branding / Web
                    </p>
                </div>
            </div>
            <div class="item">
                <div class="media-holder">
                    <img src="imagenes/proyectos/proyecto5.jpg" alt="" />
                    <div class="hover-content">
                        <div class="link-container">
                            <a href="imagenes/proyectos/proyecto5.jpg" class="img-link"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="detail-container">
                    <h4><a href="#">No Doubt</a></h4>
                    <p>
                        Branding / Package
                    </p>
                </div>
            </div>
            
        </div>
         -->
    </div>
</section>
<!-- ******************************************************************* -->
<!-- *********************       PIE PAGINA         ******************** -->
<!-- ******************************************************************* -->
<footer id="piepagina">
    <div class="pie-izq">
        <div class="logo-pie">
            <img src="imagenes/logo-deltacover.jpg" alt="">
        </div>
        <p>Deltacover está orientada al diseño, desarrollo y ejecución de cubiertas con membranas.<br>
        Nuestra ilimitada gama de diseños y soluciones, nos ha permitido revolucionar el concepto de coberturas en Latinoamérica.</p> 
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
            <a href="mailto:info@cidelsa.com" target="_blank"><i class="icon-mail"></i>info@cidelsa.com</a>
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
<?php include "modulos/pie-pagina.php"; ?>
<!-- FlexSlider -->
<script type="text/javascript">
$(function(){
  SyntaxHighlighter.all();
});
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
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