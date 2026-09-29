<?php 
include ('../../app/config.php');
include ('../../admin/layout/parte1.php'); 
include ('../../app/controllers/usuarios/listado_de_usuarios.php'); ?>

<br>
<div class="container">
  <h1>Listado de usuarios</h1>

  <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Usuarios registrados</b></h3>

                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <table id="example1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center">Nro</th>
                            <th style="text-align: center">Nombre completo</th>
                            <th style="text-align: center">Email</th>
                            <th style="text-align: center">Cargo</th>
                            <th style="text-align: center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador = 0;
                        foreach ( $usuarios as $usuario ){ 
                          $contador = $contador + 1; 
                          $id_usuario = $usuario['id_usuario'];
                          ?>
                        <tr>
                            <td><?php echo $contador; ?></td>
                            <td><?php echo $usuario['nombre_completo']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td><?php echo $usuario['cargo']; ?></td>
                            <td style="text-align: center;">
                                
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="show.php?id_usuario=<?php echo $id_usuario; ?>" class="btn btn-info"><i class="bi bi-eye-fill"></i> Ver</a>
                                    <a href="update.php?id_usuario=<?php echo $id_usuario; ?>" type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i> Editar</button></a>
                                    <a href="delete.php?id_usuario=<?php echo $id_usuario;?>" type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Borrar</button></a>
                                </div>
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
            "info": "Mostrando _START_ a _END_ de _TOTAL_ usuarios",
            "infoEmpty": "Mostrando 0 a 0 de 0 usuarios",
            "infoFiltered": "(Filtrado de _MAX_ total usuarios)",
            "lengthMenu": "Mostrar _MENU_ usuarios",
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


