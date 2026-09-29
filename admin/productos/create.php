 <?php 
include ('../../app/config.php');
include ('../../admin/layout/parte1.php'); ?>

<br>
<div class="container">
  <h1>Creación de un nuevo Producto</h1>

  <div class="row">
    <div class="col-md-12">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title"><b>Datos del Producto</b></h3>
              </div>
              <div class="card-body">               
                <form action="../../app/controllers/" method="post">
                  <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Código</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nombre del producto</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Descripción</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Stock</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Stock minimo</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Stock máximo</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Precio compra</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Precio venta</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Fecha de ingreso</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Imagen</label>
                                    <input type="file" class="form-control" id="file">
                                    <br>
                                    <center>
                                        <output id="list"></output>
                                    </center>
                                </div>
                            </div>
                    </div>
                <hr>
                <div class="row">
                  <div class="col-md-12">
                    <a href="index.php" class="btn btn-secondary">Cancelar</a>
                    <input type="submit" class="btn btn-primary" value="Registrar Producto">
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>
  </div>
</div>

<?php 
include ('../../admin/layout/parte2.php');
include ('../../admin/layout/mensaje.php');
?>

<script>
    function arquivo(evt){
    var files = evt.target.files;
    for(var i = 0, f; f = files[i]; i++) {
        if(!f.type.match('image.*')) {
            continue;
        }
        var reader = new FileReader();
        reader.onload = (function(theFile){
            return function(e){
                document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="200px" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);
        reader.readAsDataURL(f);
    }
}
document.getElementById("file").addEventListener('change', arquivo, false);

</script>

