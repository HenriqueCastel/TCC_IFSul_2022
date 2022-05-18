

<?php $__env->startSection('titulo', 'Editar Avaliação'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="mb-3 text-center">
        <br>
        <h1>Editar Avaliação da Clínica</h1>
    </div>
    <form action="<?php echo e(route('clinicsEvaluations.update', $clinicsEvaluation)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="nota" class="form-label">Nota</label>
            <select value="<?php echo e($clinicsEvaluation->nota); ?>" class="form-control" id="nota" name="nota">
                <option selected>Nota:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="comentario" class="form-label">Comentário:</label>
            <input type="text" value="<?php echo e($clinicsEvaluation->comentario); ?>" class="form-control" id="comentario" name="comentario" placeholder="Comentário: (opcional)">
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="patient_id" class="form-label">Paciente:</label>
            <input type="text" value="<?php echo e($clinicsEvaluation->patient->id); ?>" class="form-control" id="patient_id" name="patient_id" placeholder="Paciente:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="clinic_id" class="form-label">Clínica:</label>
            <input type="text" value="<?php echo e($clinicsEvaluation->clinic->id); ?>" class="form-control" id="clinic_id" name="clinic_id" placeholder="Clínica:" required>
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Atualizar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clinicsEvaluations/edit.blade.php ENDPATH**/ ?>