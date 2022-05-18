

<?php $__env->startSection('titulo', 'Fazer Afiliação do Médico'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="mb-3 text-center">
        <br>
        <h1>Fazer Afiliação do Médico</h1>
    </div>
    <form action="<?php echo e(route('doctorsClinics.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="doctor_id" class="form-label">Médico:</label>
            <input type="text" class="form-control" id="doctor_id" name="doctor_id" placeholder="Digite o médico:" required>
        </div>
        <div class="mb-3 col-lg-7 mx-auto">
            <label for="clinic_id" class="form-label">Clínica:</label>
            <input type="text" class="form-control" id="clinic_id" name="clinic_id" placeholder="Digite a clínica:" required>
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit">Enviar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc2\resources\views/doctorsClinics/create.blade.php ENDPATH**/ ?>