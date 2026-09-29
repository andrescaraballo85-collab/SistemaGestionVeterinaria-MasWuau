<?php
                if( (isset($_SESSION['mensaje'])) && (isset($_SESSION['icono']))){ 
                  $restpuesta = $_SESSION['mensaje'];
                  $icono = $_SESSION['icono'];?>
                  <script>
                    Swal.fire({
                      position: "top-end",
                      icon: "<?php echo $icono;?>",
                      title: '<?php echo $restpuesta;?>',
                      showConfirmButton: false,
                      timer: 3000
                    });
                    </script>
                <?php
                  unset($_SESSION['mensaje']);                
                }
                ?>