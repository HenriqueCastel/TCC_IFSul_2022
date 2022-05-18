

<?php $__env->startSection('titulo', 'Agendar Consulta'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="mb-3 text-center">
        <br>
        <h1>Agendar Consulta</h1>
    </div>
    <form action="<?php echo e(route('appointments.store')); ?>" method="POST">
        <?php echo csrf_field(); ?> 
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="data" class="form-label">Data:</label>
            <input type="text" class="form-control" id="data" name="data" placeholder="Data:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="hora" class="form-label">Hora:</label>
            <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="clinic_id" class="form-label">Clínica:</label>
            <input type="text" class="form-control" id="clinic_id" name="clinic_id" placeholder="Clínica:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="doctor_id" class="form-label">Médico:</label>
            <input type="text" class="form-control" id="doctor_id" name="doctor_id" placeholder="Médico:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="patient_id" class="form-label">Paciente:</label>
            <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="Paciente:" required>
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Agendar</button>
        </div>
    </form>
    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc2\resources\views/appointments/create.blade.php ENDPATH**/ ?>