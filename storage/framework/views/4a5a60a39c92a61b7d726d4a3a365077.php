<?php $__env->startSection('content'); ?>
    <h2>Punto de Venta (POS)</h2>

    <form action="<?php echo e(route('pos.venta')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label>Cliente:</label>
        <select name="cliente_id">
            <option value="">Cliente de Mostrador</option>
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($c->id); ?>"><?php echo e($c->nombre); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br><br>

        <h3>Productos</h3>
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="margin-bottom:10px;">
                <label><?php echo e($p->nombre); ?> ($<?php echo e($p->precio); ?>) - Stock: <?php echo e($p->stock); ?></label>
                <input type="number" name="productos[<?php echo e($loop->index); ?>][cantidad]" placeholder="Cantidad" min="0">
                <input type="hidden" name="productos[<?php echo e($loop->index); ?>][id]" value="<?php echo e($p->id); ?>">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <button type="submit" class="btn btn-success">Registrar Venta</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/pos/index.blade.php ENDPATH**/ ?>