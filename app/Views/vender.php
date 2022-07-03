<?= $this->include('template/cabecera');?>
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



<?= $this->include('template/piedepagina');?>