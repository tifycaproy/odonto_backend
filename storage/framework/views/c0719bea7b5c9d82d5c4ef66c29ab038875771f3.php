<?php $__env->startSection('class-back', 'd-none'); ?> <?php $__env->startSection('link-back', url('#')); ?>
<?php $__env->startSection('class-new', ''); ?> <?php $__env->startSection('link-new',url('pacientes/create')); ?>
<?php $__env->startSection('titulo', 'Pacientes'); ?>

<?php $__env->startSection('content'); ?>
  <div class="col-12  grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
<datos-basicos-cliente accion="actualizar" v-bind:paciente="2"></datos-basicos-cliente>
        
        <div class="row mb-4">
          <div class="col ">
	        	<form action="">
	        		<div class="row d-flex justify-content-end">
                <div class="input-group col-md-4 col-12">
                  <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="colored-addon3">
                  <div class="input-group-append bg-primary border-primary">
                    <span class="input-group-text bg-transparent">
                      <i class="fa fa-search text-white"></i>
                    </span>
                  </div>
                </div>
	        		</div>
	        	</form>
          </div>
        </div>
        
        

        
        <div class="table-responsive">
          <table class="table">
            <thead class="">
                <tr class="table-secondary">
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cédula</th>
                  <th>Edad</th>
                  <th>Sexo</th>
                  <th>Teléfono</th>
                  <th>Correo</th>
                  <th>Dirección</th>
                  <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="">
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="<?php echo e(route('paciente.ficha.basico',3)); ?>" class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
              <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Cédula</td>
                <td>Edad</td>
                <td>Sexo</td>
                <td>Teléfono</td>
                <td>Correo</td>
                <td>Dirección</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-file"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-at"></i></a>
                    <a class="btn btn-icons btn-inverse-secondary"><i class="fa fa-times"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        

        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>