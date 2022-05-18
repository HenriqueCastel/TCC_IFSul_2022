

<?php $__env->startSection('titulo', 'Avaliações dos Médicos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Avaliações dos Médicos</h1>
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
            <?php $__currentLoopData = $doctorEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctorEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($doctorEvaluation->id); ?></th>
                    <td><?php echo e($doctorEvaluation->nota); ?></td>
                    <td><?php echo e($doctorEvaluation->comentario); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('doctorEvaluations.edit', $doctorEvaluation)); ?>">Atualizar</a>
                        <form action="<?php echo e(route('doctorEvaluations.destroy', $doctorEvaluation)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <a class="btn btn-success" href="<?php echo e(route('doctorEvaluations.create')); ?>">Fazer Avaliação</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/doctorEvaluations/index.blade.php ENDPATH**/ ?>