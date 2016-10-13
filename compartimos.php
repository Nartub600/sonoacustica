<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 3600)); 

$rand = mt_rand();
include("inc/db.php");

$pagina = $_GET["pagina"];
if($pagina == ''){$pagina = 1;};
$resultados_por_pagina = 5;

//Variables para el paginado
$consulta = "SELECT * FROM novedades";
$resultado = mysql_query($consulta,$conexion);
$cantidad_resultados = mysql_num_rows($resultado);
$cantidad_paginas = ceil($cantidad_resultados / $resultados_por_pagina);
$page_offset = $pagina * $resultados_por_pagina - $resultados_por_pagina;
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
    <link rel="stylesheet" href="css/main.css" type="text/css">


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
    <script src="js/designesia_compartimos.js"></script>
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
                        <a href="index.php">
                            <img src="images/logo2.png" alt="logo"></a>
                    </div>
                </div>

                <!-- mainmenu begin -->
                <nav>
                <ul id="mainmenu">
                    <li><a href="index.php#home" class="always-inactive">Home</a></li>
                    <li><a href="index.php#servicios" class="always-inactive">Servicios</a></li>
                    <li><a href="index.php#productos" class="always-inactive">Productos</a></li>
                    <li><a href="index.php#clientes" class="always-inactive">Clientes</a></li>
                    <li><a href="index.php#nosotros" class="always-inactive">Nosotros</a></li>
                    <li><a href="index.php#contacto" class="always-inactive">Contacto</a></li>
                    <li><a href="compartimos.php" class="active">Compartimos</a></li>
                </ul>                
				</nav>
                <!-- mainmenu close -->


            </div>
        </header>
        <!-- header close -->

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <h1>Compartimos</h1>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="blog-list">
<?php
$consulta = "SELECT * FROM novedades ORDER BY Id DESC LIMIT $page_offset, $resultados_por_pagina";
$resultado = mysql_query($consulta,$conexion);
while($rArray = mysql_fetch_array($resultado)) {
$fecha = date_parse($rArray['fecha']);
$dia = $fecha['day'];
$dia = str_pad($dia, 2, '0', STR_PAD_LEFT);
$mes = $fecha['month'];
switch ($mes) {
    case "01":
        $mes = "ENE";
        break;
    case "02":
        $mes = "FEB";
        break;
    case "03":
        $mes = "MAR";
        break;
    case "04":
        $mes = "ABR";
        break;
    case "05":
        $mes = "MAY";
        break;
    case "06":
        $mes = "JUN";
        break;
    case "07":
        $mes = "JUL";
        break;
    case "08":
        $mes = "AGO";
        break;
    case "09":
        $mes = "SEP";
        break;
    case "10":
        $mes = "OCT";
        break;
    case "11":
        $mes = "NOV";
        break;
    case "12":
        $mes = "DIC";
        break;
}
echo '
                        <li class="animated" data-animation="fadeInLeft">
                            <div class="date-box"><span class="day">'.$dia.'</span> <span class="month">'.$mes.'</span> </div>
                            <div class="post-content">
                                <div class="post-image">
                                    <span class="post-text">
                                        <img src="fotos/'.$rArray['Id'].'.jpg" alt=""></span>
                                </div>
                                <div class="post-text">
                                    <h3>'.$rArray['titulo'].'</h3>
                                    '.$rArray['contenido'].'
                                </div>
                            </div>
                            <div class="post-meta"><span></span> </div>
                        </li>
';
}
?>
                    </ul>

                    <div class="text-center">
                        <ul class="pagination">
<?php
$pag_anterior = $pagina-1;
if($pag_anterior > 0){echo '<li><a href="compartimos.php?pagina='.$pag_anterior.'">&laquo;</a></li>';};
$i = 1;
while($i <= $cantidad_paginas) {
echo '<li';if($pagina == $i){echo ' class="active"';}; echo '><a href="compartimos.php?pagina='.$i.'">';if($pagina == $i){echo '<b>';}; echo $i; ;if($pagina == $i){echo '</b>';};echo'</a></li>';
$i++;
}
$pag_siguiente = $pagina+1;
if($pag_siguiente <= $cantidad_paginas){echo '<li><a href="compartimos.php?pagina='.$pag_siguiente.'">&raquo;</a></li>';};
?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/sonoacusticaarg" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="https://www.instagram.com/sonoacusticaarg/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a>
                            <a href="https://twitter.com/sonoacusticaarg" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="https://plus.google.com/+SonoacusticaArg/posts" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
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
</body>
</html>
