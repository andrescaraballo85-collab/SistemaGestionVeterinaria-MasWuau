<?php 
include ('../../app/config.php');
include ('../../admin/layout/parte1.php'); 
include ('../../app/controllers/productos/listado _de_productos.php'); ?>

<br>
<div class="container">
  <h1>Listado de Productos</h1>

  <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Productos registrados</b></h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <table id="example1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center">Nro</th>
                            <th style="text-align: center">Codigo</th>
                            <th style="text-align: center">Nombre del producto</th>
                            <th style="text-align: center">Descripcion</th>
                            <th style="text-align: center">Imagen</th>
                            <th style="text-align: center">Stock</th>
                            <th style="text-align: center">Precio de venta</th>
                            <th style="text-align: center">Fecha de ingreso</th>
                            <th style="text-align: center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $contador = 0;
                      foreach ($productos as $producto){
                        $contador = $contador + 1;
                        $id_producto = $producto['id_producto'];
                      ?> 
                      <tr>
                        <td><center><?= $contador;?></center></td>
                        <td><?= $producto['codigo'];?></td>
                        <td><?= $producto['nombre_producto'];?></td>
                        <td>
                            <img src="<?= $producto['imagen'];?>" width="100px" alt="">
                        </td>
                        <td><center><?= $producto['stock'];?></center></td>
                        <td><center><?= $producto['precio_compra'];?></center></td>
                        <td><center><?= $producto['precio_venta'];?></center></td>
                        <td><center><?= $producto['fecha_de_ingreso'];?></center></td>
                        <td>
                            
                        </td>                      
                      </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                </table>

                <br><br>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
  </div>



</div>

<?php 
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>

<script>
$(function () {

    $("#example1").DataTable({

        "pageLength": 5,

        "language": {
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
            "infoEmpty": "Mostrando 0 a 0 de 0 Productos",
            "infoFiltered": "(Filtrado de _MAX_ total Productos)",
            "lengthMenu": "Mostrar _MENU_ Productos",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron resultados",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },

        responsive: true,
        lengthChange: true,
        autoWidth: false,

        buttons: [

            {
                extend: 'collection',
                text: '<i class="fas fa-download"></i> Exportar',
                cclassName: 'btn btn-maswuaw',

                buttons: [

                    {
                        extend: 'copy',
                        text: '<i class="fas fa-copy"></i> Copiar'
                    },

                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> PDF',
                        title: 'Listado de Usuarios - MasWuaw',
                        orientation: 'landscape',
                        pageSize: 'A4'
                    },

                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Excel',
                        title: 'Listado de Usuarios - MasWuaw'
                    },

                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv"></i> CSV',
                        title: 'Listado de Usuarios - MasWuaw'
                    },

                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> Imprimir',
                        title: 'Listado de Usuarios - MasWuaw'
                    }

                ]

            }

        ]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

});
</script>


