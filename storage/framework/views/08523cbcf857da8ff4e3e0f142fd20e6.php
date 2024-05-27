

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Agregar Alquiler')); ?></h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('alquileres.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="monto"><?php echo e(__('Monto')); ?></label>
                        <input type="text" name="monto" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_inicio"><?php echo e(__('Fecha de inicio')); ?></label>
                        <input type="date" name="fecha_inicio" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_fin"><?php echo e(__('Fecha de fin')); ?></label>
                        <input type="date" name="fecha_fin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="departamento_id"><?php echo e(__('Departamento')); ?></label>
                        <select name="departamento_id" class="form-control" required>
                            <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($departamento->id); ?>"><?php echo e($departamento->direccion); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="inquilino_id"><?php echo e(__('Inquilinos')); ?></label>
                        <select name="inquilino_id" class="form-control" required>
                            <?php $__currentLoopData = $inquilinos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquilino): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($inquilino->id); ?>"><?php echo e($inquilino->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>       
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Guardar')); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/alquileres/create.blade.php ENDPATH**/ ?>