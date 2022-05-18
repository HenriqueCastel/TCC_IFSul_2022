

<?php $__env->startSection('titulo', 'Detalhes da Clínica'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes de <?php echo e($clinic->nome); ?></h5>
        <div class="card-body">
            <p><strong>Nome: </strong> <?php echo e($clinic->nome); ?></p>
            <p><strong>Nota: </strong> <?php echo e($clinic->clinicsEvaluations()->avg('nota')); ?></p>
            <p><strong>Descrição: </strong> <?php echo e($clinic->descricao); ?></p>
            <p><strong>E-mail: </strong> <?php echo e($clinic->email); ?></p>
            <p><strong>Telefone: </strong> <?php echo e($clinic->telefone); ?></p>
            <p><strong>Endereço: </strong> <?php echo e($clinic->endereco); ?></p>
            <?php if(Auth::guard('clinic')->check()): ?>
                    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('clinics.edit', $clinic)); ?>">Editar</a>
                    <form action="<?php echo e(route('clinics.destroy', $clinic)); ?>" method="POST" style="display: inline;">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form> 
                <?php endif; ?>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('clinics.index')); ?>"> Voltar para as Clínicas </a>
        </div>
    </div>
    <br>  
    <div class="card">
        <h5 class="card-header">Médicos de <?php echo e($clinic->nome); ?></h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr> 
                        <th scope="col">Médico</th>
                        <th scope="col">Especialidade</th>
                        <th scope="col">Nota</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $clinic->doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a scope="row" href="<?php echo e(route('doctors.show', $doctor)); ?>"><?php echo e($doctor->nome); ?></td>
                            <td><?php echo e($doctor->especialidade); ?></td>
                            <td><?php echo e($doctor->doctorsEvaluations()->avg('nota')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php if(Auth::guard('clinic')->check()): ?>
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctorsClinics.create')); ?>">Adicionar Médico</a> 
            <?php endif; ?>
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Avaliações de <?php echo e($clinic->nome); ?></h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Paciente</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Comentário</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $clinic->clinicsEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinicsEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($clinicsEvaluation->patient->nome); ?></td>
                            <td><?php echo e($clinicsEvaluation->nota); ?></td>
                            <td><?php echo e($clinicsEvaluation->comentario); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php if(Auth::guard('patient')->check()): ?>
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('clinicsEvaluations.create')); ?>">Avaliar Clínica</a>
            <?php endif; ?>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/clinics/show.blade.php ENDPATH**/ ?>