<?php $__env->startSection('content'); ?>
    <h2>Panel de Administración</h2>

    <div class="admin-grid">
        <a class="btn-card" href="<?php echo e(route('productos.index')); ?>">
            <h3> Gestión de Productos📦</h3>
        </a>

        <a class="btn-card" href="<?php echo e(route('clientes.index')); ?>">
            <h3>Gestión de Clientes👥</h3>
        </a>

        <a class="btn-card" href="<?php echo e(route('informes.index')); ?>">
            <h3>Informes de Ventas📊</h3>
        </a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/admin/index.blade.php ENDPATH**/ ?>