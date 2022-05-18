

<?php $__env->startSection('titulo', 'Pacientes'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Pacientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a scope="row" href="<?php echo e(route('patients.show', $patient)); ?>"><?php echo e($patient->nome); ?></a></td>
                    <td>
                        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('patients.edit', $patient)); ?>">Editar</a>
                        <form action="<?php echo e(route('patients.destroy', $patient)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc2\resources\views/patients/index.blade.php ENDPATH**/ ?>