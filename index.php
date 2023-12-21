<?php
include("template/navbar.php");
include("admin/bd.php");

?>

<div class="container text-center mt-5 ">
  <div class="card  border border-0 bg-transparen presentation">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="admin/inventario/imagenes/vista-frontal-muchos-corazones-rosados-que-salen-caja-actual.jpg" class="img-fluid rounded" alt="caja-regalo">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h1 class="card-title p-2">Creacion LiTh</h1>
          <p class="card-text fs-3">Encuentra gran variedad de diseños para ese regalo especial </p>
          <p class="card-text fs-5">Sublimación de tazas, bolsos, vasos térmicos y mucho más. <br>
            Descubre todos los diseños que tenemos para ti </p>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="container  my-4">
  <div class="container text-center mb-3">
    <h2 class="fw-bolder"><i>Nuestros Productos </i></h2>
    <p class="fs-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit repellendus iste ullam voluptas enim earum exercitationem consequuntur libero voluptate culpa maxime delectus, quos velit ducimus voluptatum! Nam modi nulla nostrum.</p>
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="admin/inventario/imagenes/taza-portada2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Tazas</h5>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="admin/inventario/imagenes/bolso.jpg" card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Bolso</h5>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="admin/inventario/imagenes/pop.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">PopSocket</h5>

        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 18rem;">
        <img src="admin/inventario/imagenes/vaso.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vaso Térmico</h5>

        </div>
      </div>
    </div>
  </div>
</div>
<h2 class="fw-bolder text-center"><i>Diseños más elegidos</i></h2>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
    <?php 
    include('admin/inventario/producto.php');
    ?>
    </div>
  </div>
   
</div>