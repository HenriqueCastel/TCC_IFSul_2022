

<?php $__env->startSection('titulo', 'Detalhes da Avaliação'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Avaliação <?php echo e($patientsEvaluation->patient->id); ?></h5>
        <div class="card-body">
            <p><strong>ID: </strong> <?php echo e($patientsEvaluation->id); ?></p>
            <p><strong>Médico: </strong> <?php echo e($patientsEvaluation->doctor->id); ?></p>
            <p><strong>Paciente: </strong> <?php echo e($patientsEvaluation->patient->id); ?></p>
            <p><strong>Nota: </strong> <?php echo e($patientsEvaluation->nota); ?></p>
            <p><strong>Comentário: </strong> <?php echo e($patientsEvaluation->comentario); ?></p>
            <br>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('patientsEvaluations.index')); ?>"> Voltar para as Avaliações</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/patientsEvaluations/show.blade.php ENDPATH**/ ?>