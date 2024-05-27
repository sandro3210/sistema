
 
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Detalles del País')); ?></h1>
 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo e(__('ID')); ?></h5>
                <p class="card-text"><?php echo e($pais->id); ?></p>
 
                <h5 class="card-title"><?php echo e(__('Nombre')); ?></h5>
                <p class="card-text"><?php echo e($pais->nombre); ?></p>
 
                <a href="<?php echo e(route('paises.edit', $pais->id)); ?>" class="btn btn-warning"><?php echo e(__('Editar')); ?></a>
                <form action="<?php echo e(route('paises.destroy', $pais->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger"><?php echo e(__('Eliminar')); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/paises/show.blade.php ENDPATH**/ ?>