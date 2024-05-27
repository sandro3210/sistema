
 
<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Países')); ?></h1>
 
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
 
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?php echo e(route('paises.create')); ?>" class="btn btn-primary"><?php echo e(__('Agregar País')); ?></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th><?php echo e(__('ID')); ?></th>
                            <th><?php echo e(__('Nombre')); ?></th>
                            <th><?php echo e(__('Acciones')); ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $paises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($pais->id); ?></td>
                                <td><?php echo e($pais->nombre); ?></td>
                                <td>
                                    <a href="<?php echo e(route('paises.show', $pais->id)); ?>" class="btn btn-info btn-sm"><?php echo e(__('Ver')); ?></a>
                                    <a href="<?php echo e(route('paises.edit', $pais->id)); ?>" class="btn btn-warning btn-sm"><?php echo e(__('Editar')); ?></a>
                                    <form action="<?php echo e(route('paises.destroy', $pais->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm"><?php echo e(__('Eliminar')); ?></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/paises/index.blade.php ENDPATH**/ ?>