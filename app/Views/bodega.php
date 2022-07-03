<?= $this->include('template/cabecera');?>
<div class="container">
<div class="row">
  <div class="col-sm-12 mt-5">

    <div class="card card-body table-responsive ">
      <table class="table table-responsive table-bordered ">
        <h4 class="p-3 bg-secondary bg-gradient fw-bold text-center"> PRODUCTOS EN BODEGA
          <a href="<?= base_url('saveEmployee') ?>" class="btn btn-warning float-end">Agregar+Producto</a> 
        </h4>
        <tr>
          <th>ID_PRODUCTO</th>
          <th>NOMBRE</th>
          <th>CÓDIGO</th>
          <th>DESCRIPCION</th>
          <th>CANTIDAD</th>
        </tr>
        <?php foreach($datos as $key): ?>
          <tr>
          <th><?php echo $key->id_producto ?></th>
          <th><?php echo $key->nombre ?></th>
          <th><?php echo $key->Código ?> </th>
          <th><?php echo $key->descripcion ?></th>
          <th><?php echo $key->cantidad ?></th>
          <td>
            <a href="<?php echo base_url('/editar'); ?>" type="button" class="btn btn-primary"><i class="fa-solid fa-paintbrush"></i></a>
          </td>
          <td>
            <a href="<?= base_url() ?>/eliminar/<?= $key->id_producto;?>" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
          </td>
        </tr>

          <?php endforeach; ?>
      </table>

    </div>

  </div>

</div>
</div>

<?= $this->include('template/piedepagina');?>


