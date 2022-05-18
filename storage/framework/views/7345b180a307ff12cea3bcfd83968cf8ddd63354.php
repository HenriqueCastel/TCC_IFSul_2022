

<?php $__env->startSection('titulo', 'Avaliações dos Pacientes'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Avaliações dos Pacientes</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nota</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $patientEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($patientEvaluation->id); ?></th>
                    <td><?php echo e($patientEvaluation->nota); ?></td>
                    <td><?php echo e($patientEvaluation->comentario); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('patientEvaluations.edit', $patientEvaluation)); ?>">Atualizar</a>
                        <form action="<?php echo e(route('patientEvaluations.destroy', $patientEvaluation)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <a class="btn btn-success" href="<?php echo e(route('patientEvaluations.create')); ?>">Fazer Avaliação</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/patientEvaluations/index.blade.php ENDPATH**/ ?>