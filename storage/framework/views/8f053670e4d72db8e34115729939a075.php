
 
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Agregar Usuario')); ?></h1>
 
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="<?php echo e(route('usuarios.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="nombre"><?php echo e(__('Nombre')); ?></label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><?php echo e(__('Correo Electrónico')); ?></label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pais_id"><?php echo e(__('País')); ?></label>
                        <select name="pais_id" class="form-control" required>
                            <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($pais->id); ?>"><?php echo e($pais->nombre); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bio"><?php echo e(__('Biografía')); ?></label>
                        <textarea name="bio" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo e(__('Guardar')); ?></button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/usuarios/create.blade.php ENDPATH**/ ?>