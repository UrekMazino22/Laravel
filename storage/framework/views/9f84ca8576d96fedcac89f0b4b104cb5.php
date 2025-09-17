<?php $__env->startSection('content'); ?>
    <h2>Editar Cliente</h2>
    <form action="<?php echo e(route('clientes.update', $cliente->id)); ?>" method="POST">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <label>Tipo Documento:</label>
        <input type="text" name="tipo_documento" value="<?php echo e($cliente->tipo_documento); ?>" required><br><br>

        <label>Número Documento:</label>
        <input type="text" name="numero_documento" value="<?php echo e($cliente->numero_documento); ?>" required><br><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo e($cliente->nombre); ?>" required><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" value="<?php echo e($cliente->direccion); ?>"><br><br>

        <label>Ciudad:</label>
        <input type="text" name="ciudad" value="<?php echo e($cliente->ciudad); ?>"><br><br>

        <label>Cédula:</label>
        <input type="text" name="cedula" value="<?php echo e($cliente->cedula); ?>"><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo e($cliente->telefono); ?>"><br><br>

        <button type="submit" class="btn btn-success">Actualizar</button>

<a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-warning">Volver</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/admin/clientes/edit.blade.php ENDPATH**/ ?>