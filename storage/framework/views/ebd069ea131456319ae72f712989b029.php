<?php $__env->startSection('content'); ?>
    <h2>Editar Producto</h2>
    <form action="<?php echo e(route('productos.update', $producto->id)); ?>" method="POST">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo e($producto->nombre); ?>" required><br><br>

        <label>Descripción:</label>
        <input type="text" name="descripcion" value="<?php echo e($producto->descripcion); ?>"><br><br>

        <label>Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?php echo e($producto->precio); ?>" required><br><br>

        <label>Stock:</label>
        <input type="number" name="stock" value="<?php echo e($producto->stock); ?>" required><br><br>

        <button type="submit" class="btn btn-success">Actualizar</button>
               <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-warning" style="text-decoration:none; color:black;">
            Volver
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/admin/productos/edit.blade.php ENDPATH**/ ?>