<?php $__env->startSection('content'); ?>
    <h2>Gestión de Clientes</h2>
    <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-success">+ Nuevo Cliente</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Documento</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($c->id); ?></td>
                    <td><?php echo e($c->tipo_documento); ?> <?php echo e($c->numero_documento); ?></td>
                    <td><?php echo e($c->nombre); ?></td>
                    <td><?php echo e($c->ciudad); ?></td>
                    <td><?php echo e($c->telefono); ?></td>
                    <td>
                        <a href="<?php echo e(route('clientes.edit', $c->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('clientes.destroy', $c->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Eliminar cliente?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/admin/clientes/index.blade.php ENDPATH**/ ?>