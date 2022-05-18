

<?php $__env->startSection('titulo', 'Avaliações dos Médicos'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Avaliações dos Médicos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Médico</th>
                <th scope="col">Nota</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $doctorsEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctorsEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><?php echo e($doctorsEvaluation->patient->nome); ?></a></td>
                    <td><?php echo e($doctorsEvaluation->doctor->nome); ?></td>
                    <td><?php echo e($doctorsEvaluation->nota); ?></td>
                    <td><?php echo e($doctorsEvaluation->comentario); ?></td>
                    <td>
                        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctorsEvaluations.edit', $doctorsEvaluation)); ?>">Editar</a>
                        <form action="<?php echo e(route('doctorsEvaluations.destroy', $doctorsEvaluation)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctorsEvaluations.create')); ?>">Fazer Avaliação</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/doctorsEvaluations/index.blade.php ENDPATH**/ ?>