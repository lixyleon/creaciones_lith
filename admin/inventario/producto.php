


<div class="container-fluid ">
    <div class="row gap-3 justify-content-center">
<?php
$sql = $conexion->query("SELECT * FROM diseno");
$filas = $sql->fetchAll(PDO::FETCH_OBJ);
foreach ($filas as $fila) { ?>

            <!-- card trigger modal -->
            <div class="col-3 card border border-danger-subtle border-4" data-bs-toggle="modal" data-bs-target="#card<?php echo $fila->id; ?>">
                <img src="admin/inventario/<?php echo $fila->ruta; ?> " class="card-img-top" alt="...">
                <div class="card-body text-center d-flex justify-content-around">
                    <button class="btn btn-secondary"><a href="#card<?php echo $fila->id; ?>" class="btn text-white" style="width: 5rem;"> Ver </a></button>
                    <button class="btn btn-danger"><a href="../../form.php" class="text-white">Comprar</a></button>


                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="card<?php echo $fila->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="admin/inventario/<?php echo $fila->ruta; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="modal-footer">

                            <a href="form.php" class="btn text-white">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            
            
            
            <?php  } ?>
        </div>
    </div>

