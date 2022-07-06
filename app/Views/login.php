<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio Sesión</title>
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <div id="particles-js"></div>

  

<div class="login-design">
        <div class="waves">
          <img src="img/login_.svg" style="width: 1200%; margin: 10vh auto;">
        </div>
        </div>


        
  <br><br><br>
  <div class="container" style="width: 80%; margin: 25px auto;">

    <div class="row">

      <div class="col-sm-4"></div>

      <div class="col-sm-4">

        <center>

          <h1>Inicio Sesión</h1>
        
        </center>
        
        <br><br>
        <div id="principal" class="form-body">
          
        <form action="<?php echo base_url('/login') ?> " method="POST" class="g-3 needs-validation" novalidate>
          
        
          <div>
            <center>
              <label for="usuario">Usuario</label>
            </center>

            <input type="text" name="usuario" class="form-control" required="">

            <div class="invalid-feedback">
              Por favor ingrese su nombre
            </div>

          </div>

          <br>
          <div>
            <center>
              <label for="password">Contraseña</label>
            </center>

            <input type="password" name="password" class="form-control" required="">

            <div class="invalid-feedback">
              Por favor ingrese su contraseña
            </div>

          </div>

          <br>
          <center>
            <button class="btn btn-lg btn-success btn-block">Entrar</button>
          </center>
          <br>


        </form>
        </div>

      </div>

      <div class="col-sm-4"></div>
    </div>
    
  </div>

