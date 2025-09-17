<?php $__env->startSection('content'); ?>
    <h2>Panel de Administración</h2>
    <ul>
        <li><a class="btn btn-primary" href="<?php echo e(route('productos.index')); ?>">Gestión de Productos</a></li>
        <li><a class="btn btn-primary" href="<?php echo e(route('clientes.index')); ?>">Gestión de Clientes</a></li>
        <li><a class="btn btn-primary" href="<?php echo e(route('informes.index')); ?>">Informes de Ventas</a></li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/ParcialEmpanada/ParcialEmpanada/resources/views/admin/index.blade.php ENDPATH**/ ?>