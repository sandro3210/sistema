

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Detalles del Alquiler')); ?></h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e(__('Monto')); ?></h5>
                <p class="card-text"><?php echo e($alquiler->monto); ?></p>

                <h5 class="card-title"><?php echo e(__('Fecha de Inicio')); ?></h5>
                <p class="card-text"><?php echo e($alquiler->fecha_inicio); ?></p>

                <h5 class="card-title"><?php echo e(__('Fecha de Fin')); ?></h5>
                <p class="card-text"><?php echo e($alquiler->fecha_fin); ?></p>

                <h5 class="card-title"><?php echo e(__('Departamento')); ?></h5>
                <p class="card-text"><?php echo e($alquiler->departamento->direccion); ?></p>

                <h5 class="card-title"><?php echo e(__('Inquilinos')); ?></h5>
                <ul>
                    <?php $__currentLoopData = $alquiler->inquilinos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquilino): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($inquilino->nombre); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/alquileres/show.blade.php ENDPATH**/ ?>