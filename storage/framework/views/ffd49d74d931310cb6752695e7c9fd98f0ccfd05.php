

<?php $__env->startSection('titulo', 'Detalhes do Paciente'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes de <?php echo e($patient->nome); ?></h5>
            <div class="card-body">
                <p><strong>Nome: </strong> <?php echo e($patient->nome); ?></p>
                <p><strong>E-mail: </strong> <?php echo e($patient->email); ?></p>
                <p><strong>Telefone: </strong> <?php echo e($patient->telefone); ?></p>
                <?php if(Auth::guard('patient')->check()): ?>
                    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('patients.edit', $patient)); ?>">Editar</a>
                    <form action="<?php echo e(route('patients.destroy', $patient)); ?>" method="POST" style="display: inline;">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form> 
                <?php endif; ?>
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('patients.index')); ?>"> Voltar</a>
            </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/patients/show.blade.php ENDPATH**/ ?>