<?php 
include("template/navbar.php");
?>
    <h2 class="text-center mt-3">Datos del Pedido</h2>
      <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="images/Imagen1_2.png" class="img-fluid rounded-start" alt="Imagen seleccionado">
              </div>
              <div class="col-md-8">
                <div class="card-body text-center">
                  <h5 class="card-title">Diseño seleccionado</h5>
                  <p class="card-text">Termina el pedido con los datos solicitados a continuación. Luego te enviaremos al correo el diseño sobre el producto seleccionado. Tendrás la opción de personalizarlo.</p>
                  <a href="catalogo.php" class="btn mt-3">Seleccionar otro diseño</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    <div class="container my-5 color-form text-center">
        
        <form>
            <div class="row ">
                <div class="col-md-4 my-3 ">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-4 my-3">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Apellido" required>
                </div>
                <div class="col-md-4 my-3">
                    <label>Correo electrónico</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" placeholder="email"
                            aria-describedby="inputGroupPrepend2" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <label>Tipo de Producto</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Seleccion un tipo de producto</option>
                        <option>Taza</option>
                        <option>Bolso</option>
                        <option>Vaso Térmico</option>
                        <option>PopSocket</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" placeholder="Cantidad" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Entidad Federal</label>
                    <input type="text" class="form-control" id="estado" placeholder="Entidad Federal" required>
                </div>
                <div class="col-md-3 mb-3">
                    <label>Ciudad</label>
                    <input type="text" class="form-control" id="city" placeholder="Ciudad" required>
                </div>
            </div>

            <button class="btn mb-4" type="submit">Realizar pedido</button>
        </form>
    </div>
    <div class="container mb-5">
        <div class=" text-center text-danger border-bottom border-danger ">
            <div class="card-body fs-4">
                El diseño será enviado por correo electrónico para la confirmación de su pedido
            </div>
        </div>
    </div>










    <?php 
include("template/footer.php");
?>