

<?php $__env->startSection('titulo', 'Detalhes da Avaliação'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Avaliação <?php echo e($doctorsEvaluation->doctor->id); ?></h5>
        <div class="card-body">
            <p><strong>ID: </strong> <?php echo e($doctorsEvaluation->id); ?></p>
            <p><strong>Paciente: </strong> <?php echo e($doctorsEvaluation->patient->id); ?></p>
            <p><strong>Médico: </strong> <?php echo e($doctorsEvaluation->doctor->id); ?></p>
            <p><strong>Nota: </strong> <?php echo e($doctorsEvaluation->nota); ?></p>
            <p><strong>Comentário: </strong> <?php echo e($doctorsEvaluation->comentario); ?></p>
            <br>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctorsEvaluations.index')); ?>"> Voltar para as Avaliações</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/doctorsEvaluations/show.blade.php ENDPATH**/ ?>