

<?php $__env->startSection('main-content'); ?>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo e(__('Departamentos')); ?></h1>

        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="<?php echo e(route('departamentos.create')); ?>" class="btn btn-primary"><?php echo e(__('Agregar Departamento')); ?></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Dirección</th>
                            <th>Renta</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $departamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $departamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($departamento->direccion); ?></td>
                                <td><?php echo e($departamento->renta); ?></td>
                                <td>
                                    <a href="<?php echo e(route('departamentos.show', $departamento)); ?>" class="btn btn-info btn-sm"><?php echo e(__('Ver')); ?></a>
                                    <a href="<?php echo e(route('departamentos.edit', $departamento)); ?>" class="btn btn-warning btn-sm"><?php echo e(__('Editar')); ?></a>
                                    <form action="<?php echo e(route('departamentos.destroy', $departamento)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\RelacionesTablas\resources\views/departamentos/index.blade.php ENDPATH**/ ?>