

<?php $__env->startSection('titulo', 'Editar Avaliação'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <h1>Editar Avaliação</h1>
    <form action="<?php echo e(route('patientsEvaluations.update', $patientsEvaluation)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="nota" class="form-label">Nota</label>
            <input type="text" value="<?php echo e($patientsEvaluation->nota); ?>" class="form-control" id="nota" name="nota" placeholder="Nota:" required>
        </div>
        <div class="mb-3">
            <label for="comentario" class="form-label">Comentário</label>
            <input type="text" value="<?php echo e($patientsEvaluation->comentario); ?>" class="form-control" id="comentario" name="comentario" placeholder="Comentário:" required>
        </div>
        <div class="mb-3">
            <label for="doctor_id" class="form-label">Médico</label>
            <input type="text" value="<?php echo e($patientsEvaluation->doctor->id); ?>" class="form-control" id="doctor_id" name="doctor_id" placeholder="Médico:" required>
        </div>
        <div class="mb-3">
            <label for="patient_id" class="form-label">Paciente</label>
            <input type="text" value="<?php echo e($patientsEvaluation->patient->id); ?>" class="form-control" id="patient_id" name="patient_id" placeholder="Paciente:" required>
        </div>
        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Atualizar</button>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/patientsEvaluations/edit.blade.php ENDPATH**/ ?>