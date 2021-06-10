<?php $title = "Adopta una adorable mascota";
require 'views/head.php' ?>
<?php require 'views/navbar-adopcion.php' ?>
<div class="container-fluid bg-rosado">

  <div class="container bg-rosado">
    <h3>Adopta una adorable mascota</h3>
    <hr>
    <div class="row" id="mascotas"></div>
  </div>

  <template id="template-mascotas">
    <div class="col-12 mb-2 col-md-4">
      <div class="card cardzoom">
        <img src="" alt="" class="img-fluid card-img-top">
        <!--Recordar hacer imagenes de igual tamaño para un mejor manejo-->
        <input type="hidden" id="pruebaimg" value="">
        <div class="card-body card-img-overlay">
          <h1 class="name-mascota text-white">Nombre</h1>
          <h5 class=""></h5>
          <h2 class="categoria-mascota text-white">Categoria</h2>
          <button class="btn btn-dark">Adoptar</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
          </button>
        </div>
      </div>
    </div>
  </template>

  



</div>


<?php require 'views/footer-adopcion.php' ?>