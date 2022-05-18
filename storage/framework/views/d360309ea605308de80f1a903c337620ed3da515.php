

<?php $__env->startSection('titulo', 'Fazer Avaliação'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="mb-3 text-center">
        <br>
        <h1>Fazer Avaliação do Paciente</h1>
    </div>
    <form action="<?php echo e(route('patientsEvaluations.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="nota" class="form-label">Nota</label>
            <input type="range" min="1" max="5" list="marcadores" class="form-control" id="nota" name="nota" required>
            <datalist id="marcadores">
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
                <option value="4"></option>
                <option value="5"></option>
            </datalist>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="comentario" class="form-label">Comentário</label>
            <input type="text" class="form-control" id="comentario" name="comentario" placeholder="Comentário: (opcional)">
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="doctor_id" class="form-label">Médico</label>
            <input type="text" class="form-control" id="doctor_id" name="doctor_id" placeholder="Médico:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="patient_id" class="form-label">Paciente</label>
            <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="Paciente:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Enviar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/patientsEvaluations/create.blade.php ENDPATH**/ ?>