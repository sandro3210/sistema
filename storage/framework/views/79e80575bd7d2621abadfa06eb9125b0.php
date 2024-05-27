
 
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Agregar País')); ?></h1>
 
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
 
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('paises.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nombre"><?php echo e(__('Nombre')); ?></label>
                        <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo e(old('nombre')); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Guardar')); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/paises/create.blade.php ENDPATH**/ ?>