<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_set_cookie_params(0, '/');
session_name ("sonoacustica-admin"); 
session_cache_limiter ("private");
session_start();
include("../inc/db.php");
$rand = mt_rand();
if($_POST['user'] == 'admin' && $_POST['password'] == 'sonoacustica') {
  $_SESSION["login"] = 'si';
}
else{
  if($_POST['user']!=''){
    $mensaje = '<div class="alert alert-danger">Usuario o contrase&ntilde;a incorrectos</div>';
  }
}
if($_SESSION["login"] == 'si'){
  header ("location: ./?nc=".$rand);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonoac&uacute;stica - ADMIN | Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
    body {
      background: url(../images/nosotros.jpg) no-repeat top center;
    }
    </style>
</head>
<body>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name"><img alt="image" src="img/logo_lg.png" /></h1>
            </div>
            <h3>Administrador</h3>
            <p>Ingreso</p>
            <?php echo $mensaje; ?>
            <form class="m-t" role="form" action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="user" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contrase&ntilde;a" required>
                </div>
                <input type="submit" class="btn btn-primary block full-width m-b" value="Ingresar">
            </form>
        </div>
    </div>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>