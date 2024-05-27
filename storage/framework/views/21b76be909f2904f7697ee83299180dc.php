
 
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Detalles del Inquilino')); ?></h1>
 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e(__('Nombre')); ?></h5>
                <p class="card-text"><?php echo e($inquilino->nombre); ?></p>
 
                <h5 class="card-title"><?php echo e(__('Correo Electrónico')); ?></h5>
                <p class="card-text"><?php echo e($inquilino->correo_electronico); ?></p>
 
                <!-- Otros detalles del inquilino si existen -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/inquilinos/show.blade.php ENDPATH**/ ?>