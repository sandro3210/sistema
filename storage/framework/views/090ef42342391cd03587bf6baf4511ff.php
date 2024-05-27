
 
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Editar Usuario')); ?></h1>
 
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
 
        <form method="POST" action="<?php echo e(route('usuarios.update', $usuario->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="nombre"><?php echo e(__('Nombre')); ?></label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo e(old('nombre', $usuario->nombre)); ?>" required>
            </div>
            <div class="form-group">
                <label for="email"><?php echo e(__('Correo Electrónico')); ?></label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email', $usuario->email)); ?>" required>
            </div>
            <div class="form-group">
                <label for="pais"><?php echo e(__('País')); ?></label>
                <select class="form-control" id="pais" name="pais_id" required>
                    <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pais->id); ?>" <?php echo e($usuario->pais_id == $pais->id ? 'selected' : ''); ?>><?php echo e($pais->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group">
                <label for="bio"><?php echo e(__('Biografía')); ?></label>
                <textarea class="form-control" id="bio" name="bio"><?php echo e(old('bio', $usuario->perfil->bio)); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo e(__('Guardar Cambios')); ?></button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>