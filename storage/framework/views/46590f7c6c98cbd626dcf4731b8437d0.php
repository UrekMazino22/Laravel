<?php $__env->startSection('content'); ?>
    <h2>Informes de Ventas</h2>

    <form method="POST" action="<?php echo e(route('informes.filtrar')); ?>">
        <?php echo csrf_field(); ?>
        <label>Desde:</label>
        <input type="date" name="fecha_inicio">
        <label>Hasta:</label>
        <input type="date" name="fecha_fin">
        <button type="submit" class="btn btn-primary">Filtrar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID Venta</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Fecha</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($v->id); ?></td>
                    <td><?php echo e($v->cliente ? $v->cliente->nombre : 'Mostrador'); ?></td>
                    <td>$<?php echo e($v->total); ?></td>
                    <td><?php echo e($v->created_at); ?></td>
                    <td>
                        <ul>
                            <?php $__currentLoopData = $v->detalles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($d->cantidad); ?>x <?php echo e($d->producto->nombre); ?> ($<?php echo e($d->subtotal); ?>)</li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/admin/informes/index.blade.php ENDPATH**/ ?>