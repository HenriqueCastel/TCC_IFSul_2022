

<?php $__env->startSection('titulo', 'Consultas'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Consultas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
                <th scope="col">Médico</th>
                <th scope="col">Paciente</th>
                <th scope="col">Ações</th> 
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $consultas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consulta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><a href="<?php echo e(route('consultas.show', $consulta)); ?>"><?php echo e($consulta->id); ?></a></th>
                    <td><?php echo e($consulta->data); ?></td>
                    <td><?php echo e($consulta->hora); ?></td>
                    <td><?php echo e($consulta->doctor->id); ?></td>
                    <td><?php echo e($consulta->patient->id); ?></td>
                    <td>
                        <form action="<?php echo e(route('consultas.destroy', $consulta)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja cancelar?')">Cancelar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('consultas.create')); ?>">Agendar Consulta</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/consultas/index.blade.php ENDPATH**/ ?>