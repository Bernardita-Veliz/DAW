<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
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
      <div class="col-sm-12 mt-5">
        <div class="card table-responsive btn ">
          
          <table class="table table-responsive">
            <h4 class="btn btn-dark">Proyectos
            </h4>
            <div class="col-xs-12">


	<br>
	<form method="post" action="">
		<label class="btn btn-dark" for="codigo" style="width: 40rem;">Código:</label>
		<input autocomplete="off" autofocus class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el Código">
	</form>
	<br><br>
	<table class="table table-bordered">
		<thead>
			<tr>
      <th>ID_PRODUCTO</th>
          <th>NOMBRE</th>
          <th>DESCRIPCION</th>
          <th>CANTIDAD</th>
          <th>QUITAR</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<td> </td>
				<td> </td>
				<td> </td>
				<td> </td>

				<td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a></td>
			</tr>

		</tbody>
	</table>
	<h3>Total: </h3>
	<input name="total" type="hidden" value="">
	<a href="" class="btn btn-primary" style="width: 20rem;" >Terminar proyecto</a>
  <br>
	<a href="" class="btn btn-danger" style="width: 20rem;" >Cancelar proyecto</a>
</div>
          </table>
        </div>
      </div>
    </div>
</div>



<script src="https://kit.fontawesome.com/02405318cc.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>