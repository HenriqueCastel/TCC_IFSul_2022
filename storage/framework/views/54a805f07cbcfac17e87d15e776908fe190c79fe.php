

<?php $__env->startSection('titulo', 'Página Inicial'); ?>

<?php $__env->startSection('conteudo'); ?>
    <div class="mb-3 text-center">
        <br>
        <h1>Find a Doctor</h1>
        <br>
        <h5>Uma aplicação para auxiliar pacientes, médicos e clínicas.<p></p>
        Escolha o modo para realizar o Login:</h5>
        <br>
    </div>
    <div class="col-lg-7 mx-auto mb-3 text-center">
        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('patients.login')); ?>">Paciente</a>
    </div>
    <div class="col-lg-7 mx-auto mb-3 text-center">
        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctors.login')); ?>">Médico</a>
    </div>
    <div class="col-lg-7 mx-auto mb-3 text-center">
        <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('clinics.login')); ?>">Clínica</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/home.blade.php ENDPATH**/ ?>