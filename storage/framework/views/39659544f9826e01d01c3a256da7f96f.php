<?php $__env->startSection('content'); ?>
    <h2>Nuevo Producto</h2>
    <form action="<?php echo e(route('productos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion"><br><br>

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" required><br><br>

        <label>Stock:</label>
        <input type="number" name="stock" required><br><br>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-warning" style="text-decoration:none; color:black;">
            Volver
        </a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/admin/productos/create.blade.php ENDPATH**/ ?>