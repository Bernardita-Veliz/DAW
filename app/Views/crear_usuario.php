<?= $this->include('template/cabecera');?>

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
    <?= $this->include('template/piedepagina');?>


