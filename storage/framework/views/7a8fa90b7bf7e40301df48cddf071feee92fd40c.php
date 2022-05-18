

<?php $__env->startSection('titulo', 'Avaliações das Clínicas'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Avaliações das Clínicas</h1>
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
            <?php $__currentLoopData = $clinicEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinicEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($clinicEvaluation->id); ?></th>
                    <td><?php echo e($clinicEvaluation->nota); ?></td>
                    <td><?php echo e($clinicEvaluation->comentario); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('clinicEvaluations.edit', $clinicEvaluation)); ?>">Atualizar</a>
                        <form action="<?php echo e(route('clinicEvaluations.destroy', $clinicEvaluation)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <a class="btn btn-success" href="<?php echo e(route('clinicEvaluations.create')); ?>">Fazer Avaliação</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clinicEvaluations/index.blade.php ENDPATH**/ ?>