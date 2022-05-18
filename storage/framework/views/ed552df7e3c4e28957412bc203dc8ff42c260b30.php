

<?php $__env->startSection('titulo', 'Detalhes da Avaliação'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Avaliação da Clínica <?php echo e($clinicsEvaluation->clinic->nome); ?></h5>
        <div class="card-body">
            <p><strong>ID: </strong> <?php echo e($clinicsEvaluation->id); ?></p>
            <p><strong>Paciente: </strong> <?php echo e($clinicsEvaluation->patient->id); ?></p>
            <p><strong>Clínica: </strong> <?php echo e($clinicsEvaluation->clinic->id); ?></p>
            <p><strong>Nota: </strong> <?php echo e($clinicsEvaluation->nota); ?></p>
            <p><strong>Comentário: </strong> <?php echo e($clinicsEvaluation->comentario); ?></p>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('clinicsEvaluations.index')); ?>"> Voltar para as Avaliações</a>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clinicsEvaluations/show.blade.php ENDPATH**/ ?>