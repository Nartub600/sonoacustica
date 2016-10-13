<?php
if(isset($_POST['guardar'])){
  $titulo = $_POST['titulo'];
  $contenido = $_POST['contenido'];
  
  $url = str_replace(array(' ', 'á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ', '?', '"', '\'', '¿', '.', ',', ';', ':', '#', '(', ')', '!', '�'), array('-', 'a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'n', 'N', '', '', '', '', '', '', '', '', '', '', ''), $titulo);
  $url = str_replace("--","-",$url);
  $url = str_replace("--","-",$url);
  $url = str_replace("--","-",$url);
  $url = str_replace("--","-",$url);
  $url = strtolower($url);
  
  $sql = "INSERT INTO novedades (titulo, contenido, url, fecha) VALUES ('$titulo', '$contenido', '$url', NOW())";
  $rsql = mysql_query($sql,$conexion);
  //echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
  $novedad_id = mysql_insert_id();

  $uploads = '../fotos';
  if(isset($_FILES['imagen'])){
    move_uploaded_file($_FILES['imagen']['tmp_name'], $uploads.'/'.$novedad_id.'.jpg');
  }

  $mensaje = '<div class="alert alert-info">Novedad agregada satisfactoriamente.</div>';
  
}
?>
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-12">
  <?php echo $mensaje; ?>
    <h1>Novedad nueva</h1>
  </div>
  <div class="row contenido">
    <div class="col-lg-11">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-3">
            <label>T&iacute;tulo</label>
          </div>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="titulo" required>
          </div>
          <div class="col-sm-3">
            <label>Contenido</label>
          </div>
          <div class="col-sm-9">
            <textarea name="contenido" id="contenido" class="form-control"></textarea>
          </div>
          <div class="col-sm-3">
            <label>Imagen</label>
          </div>
          <div class="col-sm-9">
            <input type="file" name="imagen" accept="image/jpeg" class="btn btn-primary btn-outline" required>
          </div>
          <div class="col-sm-12">
            <a href="./?seccion=novedades&nc=<?php echo $rand; ?>" class="btn btn-danger pull-right">Volver</a>
            <input type="submit" class="btn btn-primary pull-right" name="guardar" value="Guardar">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- CK EDITOR -->
<script src="ckeditor/ckeditor.js"></script>

<script>
CKEDITOR.replace('contenido', {
    toolbar: [
    { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
    { name: 'links', items: [ 'Link', 'Unlink'] },
    { name: 'insert', items: [ 'Table', 'HorizontalRule', 'SpecialChar'] },
    { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
    { name: 'colors', items: [ 'TextColor', 'BGColor' ] }
]
});
</script>