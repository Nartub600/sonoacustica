<?php
error_reporting(0);
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 3600));

$rand = mt_rand();
include("inc/db.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sonoac&uacute;stica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consultor&iacute;a e ingenier&iacute;a en ac&uacute;stica">
    <meta name="keywords" content="">
    <meta name="author" content="">


    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

    <link rel="shortcut icon" href="images/favicon.png">
    <!-- CSS Files
    ================================================== -->
    <link rel="stylesheet" href="css/main.css?v=4" type="text/css">

   <!-- FANCYBOX-->
   <link href="fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">

    <!-- Javascript Files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/ender.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/jquery.scrollto.js"></script>
    <!--<script src="js/supersized.3.2.7.min.js"></script>-->
    <script src="js/designesia.js"></script>
    <script src="js/validation.js"></script>
    <!--
    <script type="text/javascript">

        jQuery(function ($) {

            $.supersized({

                // Functionality
                slide_interval: 3000,		// Length between transitions
                transition: 1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                transition_speed: 700,		// Speed of transition

                // Components
                slide_links: 'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
                slides: [			// Slideshow Images
                                                    { image: 'images-slider/wide1.jpg', url: '' },
                                                    { image: 'images-slider/wide2.jpg', url: '' },
													{ image: 'images-slider/wide3.jpg', url: '' },
                ]

            });
        });

    </script>
-->
    <!-- SLIDER REVOLUTION SCRIPTS
    <script type="text/javascript" src="js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    -->
</head>

<body id="homepage" class="dark">
    <div class="loader"></div>

    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <span id="menu-btn"></span>

                <div id="logo">
                    <div class="inner">
                        <a href="#home">
                            <img src="images/logo2.png" alt="logo"></a>
                    </div>
                </div>

                <!-- mainmenu begin -->
                <nav>
                <ul id="mainmenu">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#productos">Productos</a></li>
                    <li><a href="#clientes">Clientes</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="compartimos.php" class="always-inactive">Compartimos</a></li>
                </ul>
				</nav>
                <!-- mainmenu close -->


            </div>
        </header>
        <!-- header close -->

        <!-- content begin -->
        <div id="content" class="no-bottom no-top">



            <!-- home section begin -->
            <section id="home" data-speed="3" data-type="background">
                <div class="container home">
                    <div class="row home-content">
                        <div class="col-md-12 text-center">
                          <img src="images/logo_lg.png" class="animated logo-home" data-animation="fadeIn">
                        </div>
                        <div class="col-md-12 text-center" style="margin-top: 25px;">
                            <h1 class="white texto-sombra titulo-home" data-animation="fadeInLeft">
                              "Creamos ambientes ac&uacute;sticos"
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pricing section close -->



            <!-- servicios section begin -->
            <section id="servicios">
                <div class="container">
                    <div class="row row-eq-height">
                        <div class="col-md-12 text-center">
                            <h1 class="animated" data-animation="fadeInLeft">Servicios
                        	<span class="small-border"></span>
                            </h1>
                            <div class="spacer-single"></div>
                        </div>
<?php
$consulta = "SELECT * FROM servicios";
$resultado = mysql_query($consulta,$conexion);
while($rArray = mysql_fetch_array($resultado)) {
  $contenido = strip_tags($rArray['contenido']);
  $contenido = substr($rArray['contenido'],0,205).'...<br><a href="index_clean.php?id='.$rArray['Id'].'" class="iframe">[Leer m&aacute;s]</a>';
  echo '
                        <div class="col-sm-6 col-md-4 animated feature-box-image" data-animation="fadeInLeft">
                            <div class="inner">
                                <div class="text">
                                    <img src="images/servicios'.$rArray['Id'].'.jpg" alt="'.$rArray['titulo'].'" class="img-rounded">
                                    <h3>'.$rArray['titulo'].'</h3>
                                      '.$contenido.'
                                </div>
                            </div>
                        </div>
  ';
}
?>
                    </div>
                </div>
            </section>
            <!-- about us section close -->


            <!-- productos section begin -->
            <section id="productos" data-speed="5" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="animated texto-sombra" data-animation="fadeInLeft">Productos</h1>
                            <h4 class="animated texto-sombra" data-animation="fadeInRight">Esta secci&oacute;n se encuentra en construcci&oacute;n</h4>
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- productos section close -->




            <!-- include section begin -->
            <section id="clientes" data-speed="10" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="animated" data-animation="fadeInLeft">Clientes</h1>
                            <div class="spacer-single"></div>
                        </div>

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Sala de ensayo y estudio de grabaci&oacute;n</h3>
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Bren Vaneske</h3>
                                    Home Studio y Control Room
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Uni&oacute;n General Armenia de Beneficencia</h3>
                                    Casa Scout
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Pro Sonus</h3>
                                    Estudio de grabaci&oacute;n
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Pro Sonus</h3>
                                    Control Room Estudio de Mezcla y Mastering
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Estudio Moloko</h3>
                                    Calibraci&oacute;n de sistema en Control Room
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Estudio de grabaci&oacute;n Moby Dick</h3>
                                    Acondicionamiento ac&uacute;stico
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->

                        <!-- feature box begin -->
                        <div class="feature-box-image-2 col-md-6 animated" data-animation="fadeInLeft">
                            <div class="inner">
                                <img src="images/clientes.png" alt="" class="img-circle">
                                <div class="text">
                                    <h3>Bar 1310</h3>
                                    Sistema de Sonido y acondicionamiento ac&uacute;stico
                                </div>
                            </div>
                        </div>
                        <!-- feature box close -->


                    </div>
                </div>
            </section>
            <!-- include section close -->



            <!-- nosotros section begin -->
            <section id="nosotros" data-speed="12" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="animated texto-sombra" data-animation="fadeInLeft">Nosotros</h1>
                            Somos un grupo de j&oacute;venes ingenieros con amplios conocimientos en sonido y todas sus ramas, tales como la ac&uacute;stica, electroac&uacute;stica, ruido ac&uacute;stico, vibraciones, electr&oacute;nica de audio, telecomunicaciones, procesamiento de se&ntilde;ales en el dominio anal&oacute;gico y digital, grabaci&oacute;n, edici&oacute;n, mezcla, masterizaci&oacute;n y reproducci&oacute;n de se&ntilde;ales sonoras.<br>
<br>
Adem&aacute;s de contar con el equipamiento necesario para llevar a cabo cada proyecto, trabajamos en equipo seg&uacute;n lo requiera cada caso, junto a arquitectos, dise&ntilde;adores de interiores, dise&ntilde;adores industriales, t&eacute;cnicos electricistas, para brindar a nuestros clientes un servicio y producto que se adecue a las necesidades espec&iacute;ficas conservando la est&eacute;tica decorativa de cada entorno.<br>
<br>
Estamos en contacto permanente con las nuevas tecnolog&iacute;as, avances y tendencias dentro del campo.<br>
Somos adem&aacute;s m&uacute;sicos y amantes de las artes que involucran el sonido como medio de expresi&oacute;n y sabemos de la importancia de un entorno ac&uacute;stico controlado para la producci&oacute;n, grabaci&oacute;n, y reproducci&oacute;n del sonido para tal fin.
                            <div class="spacer-single"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- productos section close -->


            <!-- include section begin -->
            <section id="separador" data-speed="10" data-type="background">
            </section>



            <!-- contact section begin -->
            <section id="contacto" data-speed="15" data-type="background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="animated texto-sombra" data-animation="fadeInLeft">Contacto
                        	<span class="small-border"></span>
                            </h1>
                            <div class="spacer-single"></div>
                        </div>

                        <div class="col-md-6 div-contacto">

                            <form name="contactForm" id='contact_form' method="post" action='./contacto.php'>
                                <div>
                                    <input type='text' name='nombre' class="form-control" placeholder="Nombre y apellido" required>
                                </div>
                                <div>
                                    <input type='text' name='empresa' class="form-control" placeholder="Empresa">
                                </div>
                                <div>
                                    <input type='email' name='email' class="form-control" placeholder="Email">
                                </div>
                                <div>
                                    <input type='text' name='telefono'  class="form-control" placeholder="Tel&eacute;fono">
                                </div>
                                <div>
                                    <textarea name='mensaje' class="form-control" placeholder="Mensaje"></textarea>
                                </div>
                                <p id='submit'>
                                    <input type='submit' value='Enviar' class="btn btn-primary pull-right">
                                </p>
                            </form>
                            <div class="clearfix"></div>
                        </div>

                        <div class="col-md-6">
                            <address>
                                <span><i class="fa fa-envelope-o fa-lg"></i><a href="mailto:info@sonoacustica.com.ar">info@sonoacustica.com.ar</a></span>
                                <span>
                                <i class="fa fa-user fa-lg"></i>Dar&iacute;o Ary Magarian<br>
                                <i class="fa fa-phone fa-lg"></i>(011) 15 6276 2813<br>
                                </span>
                                <span>
                                <i class="fa fa-user fa-lg"></i>Mart&iacute;n Aimar<br>
                                <i class="fa fa-phone fa-lg"></i>(011) 15 5464 1976<br>
                                </span>
                                <span>
                                <i class="fa fa-user fa-lg"></i>Dami&aacute;n Pablo Gonzalez<br>
                                <i class="fa fa-phone fa-lg"></i>(011) 15 5815 6776<br>
                                </span>
                            </address>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact section close -->

				<!-- SMALL MODAL -->
				<div id="modal1" class="modal fade" tabindex="-1" role="dialog">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header text-center">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title">Consulta enviada</h4>
							</div>
							<div class="modal-body text-center">
								<p>Tu consulta fue enviada correctamente, en breve nos pondremos en contacto.</p>
							</div>
							<div class="modal-footer text-center">
								<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
							</div>
						</div>
					</div>
				</div>
				<!-- END SMALL MODAL -->


        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/sonoacusticaarg" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="https://www.instagram.com/sonoacusticaarg/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                            <a href="https://twitter.com/sonoacusticaarg" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="https://plus.google.com/+SonoacusticaArg/about" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="https://es.pinterest.com/sonoacusticaarg/" target="_blank"><i class="fa fa-pinterest fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
<?php
if($_GET['e']=='1'){
echo '
<script type="text/javascript">
    $(window).load(function(){
        $(\'#modal1\').modal(\'show\');
    });
</script>
'
;}
?>
<script src="fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
$(".iframe-sm").fancybox({'width': '250px', 'height': '75px', 'autoScale': true, 'fitToView'   : false, 'autoSize'  : false, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-md").fancybox({'width': '500px', 'height': 'auto', 'autoScale': true, 'fitToView'   : true, 'autoSize'  : true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe").fancybox({'width': '100%', 'height': '100%', 'maxWidth': '1000px', 'fitToView': true, 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-wide").fancybox({'width': '70%', 'height': '80%', 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-full").fancybox({'width': '100%', 'height': '80%', 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-full-height").fancybox({'width': '30%', 'height': '90%', 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});

});
      </script>
</body>
</html>
