<?php $__env->startSection('content'); ?>
    <h2>Gestión de Productos</h2>
    <a href="<?php echo e(route('productos.create')); ?>" class="btn btn-success">+ Nuevo Producto</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($p->id); ?></td>
                    <td><?php echo e($p->nombre); ?></td>
                    <td>$<?php echo e($p->precio); ?></td>
                    <td><?php echo e($p->stock); ?></td>
                    <td>
                        <a href="<?php echo e(route('productos.edit', $p->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('productos.destroy', $p->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/ParcialEmpanada/ParcialEmpanada/resources/views/admin/productos/index.blade.php ENDPATH**/ ?>