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
          <a class="nav-link active" href="<?php echo base_url('/bodega'); ?>" >Bodega</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php echo base_url('/vender'); ?>" >Proyecto</a>
        </li>
      </ul>

    </div>
    <li class="nav-item">
        <a href="<?php echo base_url('/salir'); ?>" class="btn btn-danger float-end">SALIR<span class="sr-only"></span></a>
    </li>
  </div>
</nav>
<div class="container">
    <div class="row">
      <div class="col-sm-12 mt-5">
        <div class="card table-responsive btn btn-secondary">
          <table class="table table-responsive">
            <h4 class="btn btn-dark">INICIO</h4>
            <div class="col-xs-12">

          </table>
        </div>
      </div>
    </div>
</div>


<?= $this->include('template/piedepagina');?>