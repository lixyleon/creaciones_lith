<?php
include('../bd.php');
include('../template/navbar.php');

$sentencia = $conexion->query("SELECT * FROM diseno");
$listadiseno = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card d-none d-md-block">
        <div class="card header d-flex">
          <h2 class="text-center"> Lista de diseños </h2>
        </div>
      </div>
      <div class="p-4">
        <div class="table-responsive aling-middle table-bordered d-none d-md-block">
          <table class="table table-striped">
            <thead class="table-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Ruta</th>
                <th scope="col" colspan="2">Opciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($listadiseno as $diseno) {
              ?>
                <tr class="">
                  <td scope="row"><?php echo $diseno->id; ?></td>

                  <td><?php echo $diseno->titulo; ?></td>
                  <td><?php echo $diseno->descripcion; ?></td>
                  <td><?php echo $diseno->ruta; ?></td>
                  <td><a class="text-success" href="editar.php?id=<?php echo $diseno->id; ?>"><i class="bi bi-pencil-square"></i></a></td>
                  <td><a onclick="return confirm('Estás seguro de eliminar?')" class="text-danger" href="eliminar.php ?id=<?php echo $diseno->id; ?>"><i class=" bi bi-trash"></i></a></td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card header">
          <h2 class="text-center"> Ingresar nuevo diseño: </h2>
        </div>
        <form action="save_image.php" name="subida-imagenes" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Title" autofocus>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="description" row="2" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-1">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <input type="submit" name="subir-imagen" value="Enviar imagen" class="btn btn-dark w-100 btn-block">
                </form>
      </div>
    </div>


  </div>
</div>









<br><br>






<?php
include('../bd.php');
include('../template/footer.php');
?>