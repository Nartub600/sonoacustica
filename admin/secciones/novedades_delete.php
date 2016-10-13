<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-12">
  <?php echo $mensaje; ?>
    <h1>Eliminar novedad</h1>
  </div>
  <r>
  <div class="row contenido">
  <div class="col-sm-3">
  <br><br>
      <?php
  $confirmar = $_GET['confirmar'];
  $id = $_GET['id'];
  
  if($confirmar == 'si'){
    $sEliminar="DELETE FROM novedades WHERE Id='$id'";
    $rEliminar = mysql_query($sEliminar,$conexion);
    
    echo '
    <div class="alert alert-info">Se elimin&oacute; la novedad.</div>
    <a href="?seccion=novedades&nc='.$rand.'" class="btn btn-warning">Aceptar</a>
    ';
  }
  else{
    echo '
    <div class="alert alert-danger">&iquest;Confirma eliminar la novedad?.<br>
    Esta acci&oacute;n no puede deshacerse.<br>
    </div>
    <a href="?seccion=novedades_delete&id='.$id.'&confirmar=si&nc='.$rand.'" class="btn btn-primary">Eliminar</a>
    <a href="?seccion=novedades&nc='.$rand.'" class="btn btn-danger">Cancelar</a>
    </div>';
  }
  ?>
    </div>
  </div>
</div>