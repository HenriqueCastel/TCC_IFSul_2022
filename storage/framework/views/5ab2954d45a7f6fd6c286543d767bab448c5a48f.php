

<?php $__env->startSection('titulo', 'Detalhes da Consulta'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes da Consulta <?php echo e($consulta->id); ?></h5>
        <div class="card-body">
            <p><strong>ID: </strong> <?php echo e($consulta->id); ?></p>
            <p><strong>Valor: </strong> <?php echo e($consulta->valor); ?></p>
            <p><strong>Data: </strong> <?php echo e($consulta->data); ?></p>
            <p><strong>Hora: </strong> <?php echo e($consulta->hora); ?></p>
            <p><strong>Duração: </strong> <?php echo e($consulta->duracao); ?></p>
            <p><strong>Médico: </strong> <?php echo e($consulta->doctor->id); ?></p>
            <p><strong>Paciente: </strong> <?php echo e($consulta->patient->id); ?></p>
            <br>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('consultas.index')); ?>"> Voltar</a>
        </div>
    </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/consultas/show.blade.php ENDPATH**/ ?>