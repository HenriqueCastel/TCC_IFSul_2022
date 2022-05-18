

<?php $__env->startSection('titulo', 'Avaliações das Clínicas'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Avaliações das Clínicas</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Paciente</th>
                <th scope="col">Clínica</th>
                <th scope="col">Nota</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ações</th> 
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clinicsEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinicsEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td scope="row"><?php echo e($clinicsEvaluation->patient->nome); ?></a></td>
                    <td><?php echo e($clinicsEvaluation->clinic->nome); ?></td>
                    <td><?php echo e($clinicsEvaluation->nota); ?></td>
                    <td><?php echo e($clinicsEvaluation->comentario); ?></td>
                    <td>
                        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('clinicsEvaluations.edit', $clinicsEvaluation)); ?>">Editar</a>
                        <form action="<?php echo e(route('clinicsEvaluations.destroy', $clinicsEvaluation)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('clinicsEvaluations.create')); ?>">Fazer Avaliação</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clinicsEvaluations/index.blade.php ENDPATH**/ ?>