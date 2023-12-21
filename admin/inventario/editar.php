<?php
include('../template/navbar.php');
include('../bd.php');

if (!isset($_GET['id'])) {
    header('location: index.php?mensaje=error');
    exit();
}

$id = $_GET['id'];
$sentencia = $conexion->prepare("SELECT * FROM diseno WHERE id=?;");
$sentencia->execute([$id]);
$disenos = $sentencia->fetch(PDO::FETCH_OBJ);

?>

<div class="row m-3 justify-content-center">
    <div class="col-md-4 ">
        <!-- Mensajes-->


        <h3 class="text-center">Editar diseños</h3>
        <div class="card card-body">
            <form action="editarproceso.php" name="editarimage" method="POST" enctype="multipart/form-data">

                <div class="form-group mb-3">
                    <input type="text" name="title" class="form-control" value="<?php echo $disenos->titulo; ?>" placeholder="Title" autofocus>
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" row="2" class="form-control"><?php echo $disenos->descripcion; ?></textarea>
                </div>
                <div class="form-group mb-1">
                    <input type="file" name="image" class="form-control">
                    
                            <img src="<?php echo $disenos->ruta; ?>" class="card-img-top" alt="...">
                      
                </div>
                <div class="form-group mb-3">
                    <input type="text" name="categoria" class="form-control" value="<?php echo $disenos->categoria; ?>" placeholder="Title" autofocus>
                </div>
                <input type="hidden" name="id" value="<?php echo $disenos->id;?>">
                <input type="submit" name="editar-imagen" value="Editar imagen" class="btn btn-dark w-100 btn-block">
            </form>
            
        </div>
        <button type="button" class="btn btn-secondary mt-2"> <a class="text-white text-reset text-decoration-none" href="index.php"> Regresar</a> </button>
    </div>
    
</div>


<br><br><br><br><br><br><br><br>
<?php
include('../bd.php');
include('../template/footer.php');
?>




