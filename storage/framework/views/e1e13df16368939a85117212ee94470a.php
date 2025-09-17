<?php $__env->startSection('content'); ?>
    <h2>Nuevo Cliente</h2>
    <form action="<?php echo e(route('clientes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>Tipo Documento:</label>
        <input type="text" name="tipo_documento" required><br><br>

        <label>Número Documento:</label>
        <input type="text" name="numero_documento" required><br><br>

        <label>Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion"><br><br>

        <label>Ciudad:</label>
        <input type="text" name="ciudad"><br><br>

        <label>Cédula:</label>
        <input type="text" name="cedula"><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono"><br><br>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-warning" style="text-decoration:none; color:black;">
            Volver
        </a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /workspace/Laravel/resources/views/admin/clientes/create.blade.php ENDPATH**/ ?>