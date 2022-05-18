

<?php $__env->startSection('titulo', 'Avaliações dos Pacientes'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Avaliações dos Pacientes</h1> 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Médico</th>
                <th scope="col">Paciente</th>
                <th scope="col">Nota</th>
                <th scope="col">Comentário</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $patientsEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patientsEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($patientsEvaluation->id); ?></th>
                    <td><?php echo e($patientsEvaluation->doctor->nome); ?></a></td>
                    <td><?php echo e($patientsEvaluation->patient->nome); ?></td>
                    <td><?php echo e($patientsEvaluation->nota); ?></td>
                    <td><?php echo e($patientsEvaluation->comentario); ?></td>
                    <td>
                        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('patientsEvaluations.edit', $patientsEvaluation)); ?>">Atualizar</a>
                        <form action="<?php echo e(route('patientsEvaluations.destroy', $patientsEvaluation)); ?>" method="POST" style="display: inline;">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('patientsEvaluations.create')); ?>">Fazer Avaliação</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/patientsEvaluations/index.blade.php ENDPATH**/ ?>