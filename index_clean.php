<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 3600)); 

$rand = mt_rand();
include("inc/db.php");
$id = $_GET['id'];
$consulta = "SELECT * FROM servicios WHERE Id='$id'";
$resultado = mysql_query($consulta,$conexion);
$rArray = mysql_fetch_array($resultado);

?>
<!DOCTYPE html>
<html lang="es" style="width: 100vw;">

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
    <link rel="stylesheet" href="css/main.css?v=6" type="text/css">
    
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

<body id="homepage" class="dark" style="width: 100vw;">
    <div class="loader"></div>
    <div id="wrapper">
      <!-- content begin -->
      <div id="content" class="no-bottom no-top">
        <div class="row servicios" style="width: 100vw;">
          <div class="col-md-12">
            <h1><?php echo $rArray['titulo'];?></h1>
          </div>
          <div class="col-md-6">
            <img src="images/servicios<?php echo $rArray['Id'];?>.jpg" alt="<?php echo $rArray['titulo'];?>" class="img-rounded img-responsive">
          </div>
          <div class="col-md-6">
          <?php echo nl2br($rArray['contenido'], false);?>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
