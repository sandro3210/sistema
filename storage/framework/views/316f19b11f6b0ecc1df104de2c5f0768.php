

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Editar Departamento')); ?></h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('departamentos.update', $departamento->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="direccion"><?php echo e(__('Direccion')); ?></label>
                        <input type="text" name="direccion" class="form-control" value="<?php echo e($departamento->direccion); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="renta"><?php echo e(__('Renta')); ?></label>
                        <input type="number" step="0.01" name="renta" class="form-control" value="<?php echo e($departamento->renta); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Actualizar')); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/departamentos/edit.blade.php ENDPATH**/ ?>