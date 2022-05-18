

<?php $__env->startSection('titulo', 'Detalhes do Médico'); ?>

<?php $__env->startSection('conteudo'); ?>
    <br>
    <div class="card">
        <h5 class="card-header">Detalhes de <?php echo e($doctor->nome); ?></h5>
            <div class="card-body">
                <p><strong>Nome: </strong> <?php echo e($doctor->nome); ?></p>
                <p><strong>Nota: </strong> <?php echo e($doctor->doctorsEvaluations()->avg('nota')); ?></p>
                <p><strong>E-mail: </strong> <?php echo e($doctor->email); ?></p>
                <p><strong>Telefone: </strong> <?php echo e($doctor->telefone); ?></p>
                <p><strong>Especialidade: </strong> <?php echo e($doctor->especialidade); ?></p>
                <p><strong>Localização(es): </strong> <?php echo e($doctor->localizacoes); ?></p>
                <p><strong>Valor da Consulta: </strong> R$ <?php echo e($doctor->valorDaConsulta); ?>,00</p>
                <p><strong>Convênio(s): </strong> <?php echo e($doctor->convenios); ?></p>
                <?php if(Auth::guard('doctor')->check()): ?>
                    <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctors.edit', $doctor)); ?>">Editar</a>
                    <form action="<?php echo e(route('doctors.destroy', $doctor)); ?>" method="POST" style="display: inline;">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form> 
                <?php endif; ?>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctors.index')); ?>"> Voltar para os Médicos </a>
        </div>
    </div>
        <?php if(Auth::guard('patient')->check()): ?> 
            <br>
            <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('appointments.create')); ?>">Agendar Consulta</a>
            <br>
        <?php endif; ?>    
    <br>
    <div class="card">
        <h5 class="card-header">Clínicas onde <?php echo e($doctor->nome); ?> atende</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr> 
                        <th scope="col">Clínica</th>
                        <th scope="col">Nota</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $doctor->clinics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><a scope="row" href="<?php echo e(route('clinics.show', $clinic)); ?>"><?php echo e($clinic->nome); ?></td>
                            <td><?php echo e($clinic->clinicsEvaluations()->avg('nota')); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php if(Auth::guard('doctor')->check()): ?>
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctorsClinics.create')); ?>">Adicionar Clínica</a> 
            <?php endif; ?>
        </div>
    </div>
    <br>
    <div class="card">
        <h5 class="card-header">Avaliações de <?php echo e($doctor->nome); ?></h5>
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
                    <?php $__currentLoopData = $doctor->doctorsEvaluations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctorsEvaluation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($doctorsEvaluation->patient->nome); ?></td>
                            <td><?php echo e($doctorsEvaluation->nota); ?></td>
                            <td><?php echo e($doctorsEvaluation->comentario); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php if(Auth::guard('patient')->check()): ?>
                <a class="btn btn-light" style="color: #ffffff; background-color: #27b8a0;" href="<?php echo e(route('doctorsEvaluations.create')); ?>">Avaliar Médico</a>
            <?php endif; ?>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\tcc\resources\views/doctors/show.blade.php ENDPATH**/ ?>