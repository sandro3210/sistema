
 
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Agregar Inquilino')); ?></h1>
 
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('inquilinos.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nombre"><?php echo e(__('Nombre')); ?></label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="correo_electronico"><?php echo e(__('Correo Electrónico')); ?></label>
                        <input type="email" name="correo_electronico" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Guardar')); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/inquilinos/create.blade.php ENDPATH**/ ?>