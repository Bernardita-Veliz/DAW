<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventario</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Inicio</title>
</head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light btn btn-secondary">
  <div class="container-fluid btn btn-secondary">
    <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('/saveUsuario'); ?>" >Nuevo+usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('/bodega'); ?>" >Bodega</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('/vender'); ?>" >Proyecto</a>
        </li>
      </ul>

    </div>
    <li class="nav-item">
    <a href="<?php echo base_url('/inicio'); ?>" class="btn btn-primary float-end"><i class="fa-solid fa-arrow-rotate-left"></i>Volver</a>
    </li>
    <li class="nav-item">
        <a href="<?php echo base_url('/salir'); ?>" class="btn btn-danger float-end">SALIR<span class="sr-only"></span></a>
    </li>
  </div>
</nav>



    <div class="container">
        <div class="row">
            <div class="col">               
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">      
                                                
                    <div class="p-3 mb-2 bg-secondary bg-gradient fw-bold text-center">AGREGAR NUEVO USUARIO</div>
                    <form class="row g-3 needs-validation" action="<?php base_url('saveUsuario') ?>" method="POST" novalidate>
                        <div class="col-md-4 position-relative">
                            <label for="nombre" class="form-label">Nombre Usuario</label>
                            <input type="text" class="form-control" id="" name="usuario" placeholder="ingrese nombre de usuario" required>
                           
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>


                        <div class="col-md-4 position-relative">
                            <label for="apellido" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="" name="password" placeholder="ingrese una contraseña" id="password"  required>
                          
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>                                             
                        <div class="col-md-3 position-relative">
                            <label for="tipo_usuario" class="form-label">Tipo de usuario</label>
                            <select class="form-select" id="pais" name="type" required>
                                <option selected disabled value="">Seleccionar...</option>
                                <option>Administrador</option>
                                <option>Usuario</option>
                            </select>
                            
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>                   
                        <div class="col-12">
                        <button class="btn btn-warning fw-bold float-end" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




<script src="<?php echo base_url('/js/validador.js') ?>"></script>
<script src="https://kit.fontawesome.com/02405318cc.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>