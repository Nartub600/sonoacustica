<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-12">
    <h1>Novedades <a href="?seccion=novedades_new" class="btn btn-primary btn-circle" type="button"><i class="fa fa-plus"></i></a></h1>
  </div>
<div class="row contenido">
  <div class="col-lg-9">
  <div class="ibox float-e-margins">
      <div class="ibox-content">

          <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
      <thead>
      <tr role="row">
        <th>Id</th>
        <th>Titulo</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
<?php
$consulta = "SELECT * FROM novedades";
$resultado = mysql_query($consulta,$conexion);
while($rArray = mysql_fetch_array($resultado)) {
echo '
  <tr>
    <td>'.$rArray['Id'].'</td>
    <td>'.$rArray['titulo'].'</td>
    <td><a href="./?seccion=novedades_edit&id='.$rArray['Id'].'&nc='.$rand.'"><i class="fa fa-edit fa-2x"></i></a>
    <a href="./?seccion=novedades_delete&id='.$rArray['Id'].'&nc='.$rand.'"><i class="fa fa-times fa-2x"></i></a></td>
  </tr>
';
}
?>
      </tbody>
      </table>
      </div>
          </div>

      </div>
  </div>
</div>
</div>
</div>

<!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                "iDisplayLength": 100,
                "aLengthMenu": [[10, 25, 50, 100, 1000], [10, 25, 50, 100, 1000]],
                "order": [[ 0, "desc" ]],
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'novedades'},
                    {extend: 'pdf', title: 'novedades'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ],
                "language": {
              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ning&uacute;n dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
                  "sFirst":    "Primero",
                  "sLast":     "&Uacute;ltimo",
                  "sNext":     "Siguiente",
                  "sPrevious": "Anterior"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }
          }

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

        });

    </script>