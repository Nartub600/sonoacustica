<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

session_set_cookie_params(0, '/');
session_name ("sonoacustica-admin"); 
session_cache_limiter ("private");
session_start();

if($_SESSION["login"] != 'si'){
  header ("location: ./login.php");
}

$rand = mt_rand();
include("../inc/db.php");
$seccion = $_GET['seccion'];
if(!isset($seccion)) {
  $seccion = 'novedades';
}
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sonoac&uacute;stica - ADMIN</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    
    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    
    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
   <!-- FANCYBOX-->
   <link href="fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">
   
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>
</head>

<body>
  <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
            <div class="dropdown profile-element">
              <img alt="image" src="img/logo.png" />
            </div>
            <div class="logo-element">
              <img alt="image" src="img/logo_sm.png" />
            </div>
          </li>
          <li <?php if(strpos($seccion,'novedades') !== false){echo 'class="active"';}?>>
            <a href="./?seccion=novedades&nc=<?php echo $rand; ?>"><i class="fa fa-newspaper-o"></i> <span class="nav-label">NOVEDADES</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <h1>Panel de administraci&oacute;n <div class="pull-right"><a href="./secciones/logout.php?nc=<?php echo $rand; ?>"><i class="fa fa-sign-out fa-1x"></i></a></div></h1>
            
          </div>
        </nav>
      </div>
<?php
include 'secciones/'.$seccion.'.php';
?>    
    </div>

  </div>

    <!-- Mainly scripts -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>
    
    <!-- Color picker -->
    <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    
    <script src="fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript">
 $(document).ready(function() {
    $(".fancybox").fancybox({
        openEffect  : 'none',
        closeEffect : 'none'
    });
$(".iframe-sm").fancybox({'width': '250px', 'height': '75px', 'autoScale': true, 'fitToView'   : false, 'autoSize'  : false, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-md").fancybox({'width': '500px', 'height': 'auto', 'autoScale': true, 'fitToView'   : true, 'autoSize'  : true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe").fancybox({'width': '95%', 'height': '95%', 'maxWidth': '1000px', 'fitToView': true, 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-wide").fancybox({'width': '70%', 'height': '80%', 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-full").fancybox({'width': '100%', 'height': '80%', 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});
$(".iframe-full-height").fancybox({'width': '30%', 'height': '90%', 'autoScale': true, 'transitionIn': 'none', 'transitionOut': 'none', 'type': 'iframe'});

});
      </script>


</body>

</html>
