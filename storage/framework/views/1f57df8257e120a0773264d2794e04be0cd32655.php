

<?php $__env->startSection('titulo', 'Detalhes da Consulta'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Consulta</h5>
        <div class="card-body">
            <p><strong>Data: </strong><?php echo e($appointment->data); ?></p>
            <p><strong>Hora: </strong><?php echo e($appointment->hora); ?></p>
            <p><strong>Endereço: </strong><?php echo e($appointment->clinic->endereco); ?></p>
            <p><strong>Valor da Consulta: </strong>R$ <?php echo e($appointment->doctor->valorDaConsulta); ?>,00</p>
            <p><strong>Convênio: </strong><?php echo e($appointment->doctor->convenios); ?></p>
            <p><strong>Clínica: </strong><?php echo e($appointment->clinic->nome); ?></p>
            <p><strong>Médico: </strong><?php echo e($appointment->doctor->nome); ?></p>
            <p><strong>Paciente: </strong><?php echo e($appointment->patient->nome); ?></p>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('appointments.index')); ?>"> Voltar</a>
        </div> 
    </div>
<?php $__env->stopSection(); ?>  
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/appointments/show.blade.php ENDPATH**/ ?>