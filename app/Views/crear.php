<?= $this->include('template/cabecera');?>
  <div class="container">
        <div class="row">
            <div class="col">               
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">                                    
                    <div class="p-3 mb-2 bg-secondary bg-gradient fw-bold text-center">AGREGAR PRODUCTOS</div>
                    <form class="row g-3 needs-validation" action="<?php base_url('saveEmployee') ?>" method="POST" novalidate>
                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="" placeholder="ingrese nombre del producto" id="" required>
                           
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>

                        <div class="col-md-3 position-relative">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" class="form-control" id="" name="codigo"placeholder="ingrese el código del producto" id=""  required>
                          
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>  

                        <div class="col-md-8 position-relative">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="" name="descripcion"placeholder="ingrese una descripción del producto" id=""  required>
                          
                            <div class="valid-tooltip">¡Pecfecto!</div>
                            <div class="invalid-tooltip">¡Ups! ¡Cuidado! Complete correctamente</div>
                        </div>                                             
                        <div class="col-md-3 position-relative">
                            <label for="" class="form-label">Cantidad</label>
                            <input type="number" min="0" name="cantidad" class="form-control" placeholder="ingrese cantidad del producto" id="" required>

                            
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



<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>

    <?= $this->include('template/piedepagina');?>